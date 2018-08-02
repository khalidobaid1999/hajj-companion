<?php
	//error_reporting(0);

	/*
		
		Some things need to change if the code is applied on a different environment, such as: the URLs, MySQL database authorization.


	*/

	session_start();
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "hajj_hackathon";
	$conn = mysqli_connect($host, $username, $password, $database);


	mysqli_query($conn, "SET NAMES 'utf8'"); 
	mysqli_query($conn, 'SET CHARACTER SET utf8'); 
	mysqli_query($conn, "SET character_set_results = 'utf8'");
	mysqli_query($conn, "character_set_client = 'utf8'");
	mysqli_query($conn, "character_set_connection = 'utf8'");
	mysqli_query($conn, "character_set_database = 'utf8'");

	$languages = array('العربية' => 'ar', 'English' => 'en');


//general functions
	function languagesDisplay(){
		global $languages;
		foreach($languages as  $language => $value){
			echo '<option value="'.$value.'">'.$language.'</option>';
		}
	}


//language change

	if(isset($_POST['lang_submit'])){
		if(in_array($_POST['language_select'], $languages)){
			setcookie('lang', $_POST['language_select'], time() + 86400, '/');
			header('Location: home');
		}
	}

//register users
	if(isset($_POST['register_submit'])){
		$error_message = '';
		$empty_error = $email_error = $password_error = true;
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
		$conf_password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['conf_password']));
		$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
		$field_array = array('username' => $err_username, 'password' => $err_password, 'conf_password' => $err_conf_password, 'email' => $err_email);
		
		foreach($field_array as $field => $error){
			if(empty($_POST[$field]) || !isset($_POST[$field]) || $_POST[$field] == ''){	
				$error_message .= '<li>'.$error_prefix.' '.$error.'</li>';
				$empty_error = false;
			}
		}

		if($empty_error === true){
			if($password != $conf_password){
				$error_message .= '<li>'.$err_not_matching.'</li>';
				$password_error = false;
			}
		}

		if($empty_error === true && $password_error === true){
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error_message .= '<li>'.$err_wrong_email.'</li>';
				$email_error = false;
			}
		}
		
		if($empty_error === true && $password_error === true && $email_error === true){
			$checkQ = mysqli_query($conn, "SELECT username FROM user_tbl WHERE username = '$username' OR email = '$email'");
			$countQ = mysqli_num_rows($checkQ);
			if($countQ > 0){
				$error_message .= '<li>'.$err_exist.'</li>';
				$exist_error = false;
			}
			else{
				$exist_error = 'go';
			}
		}

		if($exist_error == 'go'){
			$encrypted_pass = md5($password);
			mysqli_query($conn, "INSERT INTO user_tbl VALUES('$username', '$email', '$encrypted_pass')");
			header('Location: timeline');
			$_SESSION['username'] = $username;
		}

		if($error_message != ''){
			$_SESSION['err'] = $error_message;
			$_SESSION['err_shown'] = true;
		}



		header('Location: register');
		exit();

	}

	if(isset($_SESSION['err_shown'])){
		unset($_SESSION['err_shown']);
		exit();
	}

	if(isset($_SESSION['err'])){
		unset($_SESSION['err']);
	}

	//logout function

	if(isset($_POST['logout'])){
		
	}

	//redirect  users back
		//logged in users redirection
		$loggedin_pages = array('login.php', 'register.php', 'forgot.php');
		if(in_array(basename($_SERVER['PHP_SELF']), $loggedin_pages) && isset($_SESSION['username'])){
			header('Location: home');
		}

		//non-logged in users redirection
		$nonloggedin_pages = array('timeline.php');
		if(in_array(basename($_SERVER['PHP_SELF']), $nonloggedin_pages) && !isset($_SESSION['username'])){
			header('Location: login');
		}


?>
<!DOCTYPE html>
<html>
<head>
	  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body lang="<?php echo $lang ?>">
	<?php include_once('php/header.php'); ?>

	<div class="register_div">
		<center><form class="login_form" method="post">
			<h3><?php echo $login_submit ?></h3>
			<ul class="error_messages">
				<?php if(isset($_SESSION['err'])){ echo $_SESSION['err']; } ?>
			</ul>
			<input type="text" name="username" placeholder="<?php echo $form_username ?>" /><br/>
			<input type="password" name="password" placeholder="<?php echo $form_password ?>" /><br/>
			<input type="submit" class="green_btn" name="login_submit" value="<?php echo $login_submit ?>" /><br/>
			<a href="forgot"><?php echo $forgot_login ?></a><br/>
		</form></center>
	</div>

	<?php include_once('php/footer.php'); ?>	
</body>
</html>
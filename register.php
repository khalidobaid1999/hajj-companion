<!DOCTYPE html>
<html>
<head>
	  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/register.css" />
</head>
<body lang="<?php echo $lang ?>">
	<?php include_once('php/header.php'); ?>
	<div class="page_container">
	<div class="register_div">
		<center><form class="register_form" method="post">
			<h3><?php echo $reg_submit ?></h3>
			<input type="text" name="username" placeholder="<?php echo $form_username ?>" /><br/>
			<input type="email" name="email" placeholder="<?php echo $form_email ?>" /><br/>
			<input type="password" name="password" placeholder="<?php echo $form_password ?>" /><br/>
			<input type="password" name="conf_password" placeholder="<?php echo $form_confpass ?>" /><br/>
			<input type="submit" class="green_btn" name="register_submit" value="<?php echo $reg_submit ?>" /><br/>
			<a href="login"><?php echo $reg_already ?></a><br/>
		</form></center>
	</div>
	</div>
	<?php include_once('php/footer.php'); 
	?>	
</body>
</html>
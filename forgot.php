<!DOCTYPE html>
<html>
<head>
	  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/forgot.css" />
</head>
<body lang="<?php echo $lang ?>">	
	<?php include_once('php/header.php'); ?>
	<div class="page_container">
	<div class="forgot_div">
		<center><form class="forgot_form" method="post">
			<h3><?php echo $forgot_heading ?></h3>
			<input type="email" name="email" placeholder="<?php echo $form_email ?>" /><br/>
			<input type="submit" class="green_btn" name="forgot_submit" value="<?php echo $forgot_submit ?>" /><br/>
		</form></center>
	</div>	
	</div>
	<?php include_once('php/footer.php'); ?>	
</body>
</html>
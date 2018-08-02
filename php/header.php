<?php 
	if(isset($_SESSION['err'])){
?>
<ul class="error_messages">
<a href="javascript:void(0)" class="message_close"><i class="fa fa-times"></i></a>
<?php echo $_SESSION['err']; $message_disp = true; ?>
</ul>
<?php }  ?>
<?php if(isset($_SESSION['success'])){ ?>
<ul class="success_messages">
<a href="javascript:void(0)" class="message_close"><i class="fa fa-times"></i></a><br/>
<?php echo $_SESSION['success']; $message_disp = true; ?>
</ul>
<?php } ?>
<header class="ws-header">
	<center>
	<a href="javascript:void(0)" class="nav-btn"><i class="fas fa-bars"></i></a>
	<a href="home" class="ws-logo"><img src="images/logo-png.png" /></a>
	</center>
</header>
	<nav class="navigation-bar">
		<a href="javascript:void(0)" class="close-nav"><i class="fas fa-times"></i></a>
		<ul class="nav-list">
			<li><a href="home"><?php echo $nav_home ?></a></li>
			<?php if(isset($_SESSION['username'])){ ?>
				<li><a href="timeline"><?php echo $nav_timeline ?></a></li>
				<li>
					<form method="post">
					<input type="submit" name="logout" class="logout_btn" value="<?php echo $logout_btn ?>" />
					</form>
				</li>
			<?php }else{ ?>
			<li><a href="register"><?php echo $nav_register ?></a></li>
			<li><a href="login"><?php echo $nav_login ?></a></li>
			<?php } ?>
			<li>
			<form method="post">
			<select name="language_select" class="language_select">
				<option default value="null">- <?php echo $select_lang ?> -</option>
				<?php languagesDisplay(); ?>
			</select>	
			<input type="submit" class="lang_submit" name="lang_submit" hidden="true" />
			</form>	
			</li>
		</ul>
	</nav>
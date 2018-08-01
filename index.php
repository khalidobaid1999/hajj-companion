<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>
  
  <?php require('php/header.php') ?>

  <div class="landing_div">
  	<section class="landing_div_section">
	  	<h1 class="landing_heading"><?php echo $lp_heading ?></h1>
	  	<h5 class="landing_subheading"><?php echo $lp_subheading ?></h5>
	  	<a class="green_btn register_now" href="/register"><?php echo $register_btn ?></a>
  	</section>
  	<div class="color_overlay"></div>
  </div>

  <div class="hajj_companion">
  	<section class="landing_div_section">
  		<h1 class="hc_heading"><?php echo $hc_heading ?></h1>
  	</section>
  	<div class="color_overlay"></div>
  </div>

  <?php require('php/footer.php') ?>

</body>
</html>
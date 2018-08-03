<!DOCTYPE html>
<html>
<head>
  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body lang="<?php echo $lang ?>">
  
  <?php require('php/header.php') ?>

<div class="page_container">
<?php if(!isset($_SESSION['username'])){ ?>
  <section class="landing_div">
  	<section class="landing_div_section">
	  	<h1 class="landing_heading"><?php echo $lp_heading ?></h1>
	  	<h5 class="landing_subheading"><?php echo $lp_subheading ?></h5>
	  	<a class="green_btn register_now" href="register"><?php echo $register_btn ?></a>
  	</section>
  	<div class="color_overlay"></div>
  </section>
<?php }else{ ?>
  <section class="landing_div">
    <section class="landing_div_section">
      <h1 class="landing_heading"><?php echo $lp_heading ?></h1>
      <h5 class="landing_subheading"><?php echo $lp_subheading_logged ?></h5>
      <a class="gold_btn timeline_btn" href="timeline"><?php echo $timeline_btn ?></a>
    </section>
    <div class="color_overlay"></div>
  </section>
<?php } ?>
  <section class="hajj_companion">
    <section class="landing_div_section">
      <h1 class="hc_heading"><?php echo $hc_heading ?></h1>
      <p class="hc_text"><?php echo $hc_text ?></p>
    </section>
    <div class="color_overlay"></div>
  </section>

    <section class="future_hajj">
    <section class="landing_div_section">
      <h1 class="hc_heading"><?php echo $fh_heading ?></h1>
      <p class="hc_text"><?php echo $fh_text ?></p>
    </section>
    <div class="color_overlay"></div>
  </section>

  <section class="coming_soon">
    <img src="images/web-design2-<?php echo $lang ?>.jpg"/>
  </section>
</div>
  <?php require('php/footer.php') ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/timeline.css" />
</head>
<body lang="<?php echo $lang ?>">
	<?php include_once('php/header.php'); ?>

	<section class="time_heading_section">
		<h2 class="time_heading"><?php echo $time_heading ?></h2>
		<h6 class="time_subheading">الله أكبر , الله أكبر , الله أكبر , لا إله إلا الله , الله أكبر , الله أكبر و لله الحمد , الله أكبر كبيراً و الحمد لله كثيراً و سبحان الله بكرة و اصيلاً , لا إله إلا الله , وحده صدق وعده و نصر عبده و أعز جنده و هزم الاحزاب وحده ,لا إله إلا الله , و لا نعبد إلا إياه مخلصين له الدين و لو كره الكافرون , اللهم صل على سيدنا محمد و على ال سيدنا محمد و على اصحاب سيدنا محمد و على أنصار سيدنا محمد و على أزواج سيدنا محمد و على ذريه سيدنا محمد و سلم تسليماً كثيرا</h6>
	</section>

		<?php if(!isset($_GET['id'])){ ?>
		<center class="timeline_table_section">
		<table class="timeline_table">
			<tr>
				<th>#</th>
				<th><?php echo $tl_name ?></th>
				<th><?php echo $tl_date ?></th>
				<th><?php echo $tl_rating ?></th>
			</tr>
			<?php
				$pilgrim_q = mysqli_query($conn, "SELECT pilgrims_tbl.pilgrim_id, pilgrims_tbl.pilgrim_name_$lang, pilgrims_tbl.date_time FROM pilgrims_tbl");
				while($d = mysqli_fetch_assoc($pilgrim_q)){
					echo '
						<tr>
							<td>'.$d['pilgrim_id'].'</td>
							<td>'.$d['pilgrim_name_'.$lang].'</td>
							<td>'.$d['date_time'].'</td>
							<td><a href="timeline?id='.$d['pilgrim_id'].'">'.$tl_review.'</a></td>
						</tr>
					';
				}
			?>
		</table>
		</center>
		<?php }else{ ?>

		<?php } ?>

	<?php include_once('php/footer.php'); ?>	
</body>
</html>
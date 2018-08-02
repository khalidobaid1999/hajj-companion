<!DOCTYPE html>
<html>
<head>
	  <?php require('php/head_links.php') ?>
  <link rel="stylesheet" href="css/timeline.css" />
</head>
<body lang="<?php echo $lang ?>">
	<?php include_once('php/header.php'); ?>

<div class="page_container">
	<section class="time_heading_section">
		<h2 class="time_heading"><?php echo $time_heading ?></h2>
		<h6 class="time_subheading">"الله أكبر , الله أكبر , الله أكبر , لا إله إلا الله , الله أكبر , الله أكبر و لله الحمد , الله أكبر كبيراً و الحمد لله كثيراً و سبحان الله بكرة و اصيلاً , لا إله إلا الله , وحده صدق وعده و نصر عبده و أعز جنده و هزم الاحزاب وحده ,لا إله إلا الله , و لا نعبد إلا إياه مخلصين له الدين و لو كره الكافرون , اللهم صل على سيدنا محمد و على ال سيدنا محمد و على اصحاب سيدنا محمد و على أنصار سيدنا محمد و على أزواج سيدنا محمد و على ذريه سيدنا محمد و سلم تسليماً كثيرا"</h6>
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
				$user = $_SESSION['username'];
				$pilgrim_q = mysqli_query($conn, "SELECT pilgrims_tbl.pilgrim_id, pilgrims_tbl.pilgrim_name_$lang, pilgrims_tbl.date_time, review_tbl.username, review_tbl.rating FROM pilgrims_tbl, review_tbl WHERE review_tbl.pilgrim_id = pilgrims_tbl.pilgrim_id AND review_tbl.username = '$user'");
				$pilgrim_c = mysqli_num_rows($pilgrim_q);
				$done_pilgrims = array();
				while($d = mysqli_fetch_assoc($pilgrim_q)){
					echo '
						<tr class="done">
							<td>'.$d['pilgrim_id'].'</td>
							<td>'.$d['pilgrim_name_'.$lang].'</td>
							<td>'.$d['date_time'].'</td>
							<td>'.$d['rating'].'</td>
						</tr>
					';
					array_push($done_pilgrims, $d['pilgrim_id']);
				}
				$new_string = implode(', ', $done_pilgrims);
				if($pilgrim_c > 0){
				$pilgrim_q2 = mysqli_query($conn, "SELECT pilgrims_tbl.pilgrim_id, pilgrims_tbl.pilgrim_name_$lang, pilgrims_tbl.date_time FROM pilgrims_tbl WHERE pilgrims_tbl.pilgrim_id NOT IN ($new_string)");

				while($d2 = mysqli_fetch_assoc($pilgrim_q2)){
					echo '
						<tr>
							<td>'.$d2['pilgrim_id'].'</td>
							<td>'.$d2['pilgrim_name_'.$lang].'</td>
							<td>'.$d2['date_time'].'</td>
							<td><a href="timeline?id='.$d2['pilgrim_id'].'">'.$tl_review.'</a></td>
						</tr>
					';				
				}
			}
			else{
				$pilgrim_q2 = mysqli_query($conn, "SELECT pilgrims_tbl.pilgrim_id, pilgrims_tbl.pilgrim_name_$lang, pilgrims_tbl.date_time FROM pilgrims_tbl WHERE pilgrims_tbl.pilgrim_id");

				while($d2 = mysqli_fetch_assoc($pilgrim_q2)){
					echo '
						<tr>
							<td>'.$d2['pilgrim_id'].'</td>
							<td>'.$d2['pilgrim_name_'.$lang].'</td>
							<td>'.$d2['date_time'].'</td>
							<td><a href="timeline?id='.$d2['pilgrim_id'].'">'.$tl_review.'</a></td>
						</tr>
					';				
				}
			}
		?>
		</table>
		<?php
			$qAvg = mysqli_query($conn, "SELECT rating FROM review_tbl WHERE username = '".$_SESSION['username']."'");
			$cAvg = mysqli_num_rows($qAvg);
			$avg = 0;
			if($cAvg > 0){
			while($dAvg = mysqli_fetch_assoc($qAvg)){
				$avg = $avg + $dAvg['rating'];
			}
			$avg = $avg / $cAvg;
			}
		?>
		<h4 class="average_rating"><?php echo $average_rating ?>: <?php echo $avg ?></h4>
		</center>
		<?php }else{ ?>
			<center class="timeline_review_section">
			<hr>
				<a class="ws-right blue-url" href="timeline"><i class="fa fa-chevron-<?php echo $site_dir ?>"></i> <?php echo $goback ?></a><br/>
				<form method="post" class="timeline_review">
					<?php
						$pilgrim_id = mysqli_real_escape_string($conn, htmlspecialchars($_GET['id']));
						$find_id = mysqli_query($conn, "SELECT pilgrim_name_$lang FROM pilgrims_tbl WHERE pilgrim_id = '$pilgrim_id'");
						$find_am = mysqli_query($conn, "SELECT amenity_id, amenity_name_$lang FROM amenity_tbl WHERE pilgrim_id = '$pilgrim_id'");
						$disp_pilgrim = mysqli_fetch_assoc($find_id);
					?>
					<h3 class="pilgrim_name"><?php echo $disp_pilgrim['pilgrim_name_'.$lang]; ?></h3>
					<select name="amenity_reason">
						<option value="null" default>- <?php echo $reason_null ?> -</option>
						<?php
							while($fetch_am = mysqli_fetch_assoc($find_am)){
								echo '<option value="'.$fetch_am['amenity_id'].'">'.$fetch_am['amenity_name_'.$lang].'</option>';
							}
						?>
					</select>
					<input type="number" step="0.5" max="10" min="0" name="rating" placeholder="<?php echo $tl_rating ?>" />
					<textarea rows="10" name="comment" placeholder="<?php echo $comment_placeholder ?>" disabled></textarea>
					<input type="submit" class="green_btn" name="submit_review" value="<?php echo $review_btn ?>" />
				</form>
			</center>
		<?php } ?>
		</div>

	<?php include_once('php/footer.php'); ?>	
</body>
</html>
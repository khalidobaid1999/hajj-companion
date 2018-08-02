<footer class="ws-footer">
	<center><a class="back-to-top" href="javascript:void(0)"><i class="fa fa-arrow-up"></i></a></center>
	<p class="copyright">Hajj Companion &copy <?php echo date("Y"); ?></p>
	<section class="social-media">
		<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
		<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
		<a href="javascript:void(0)"><i class="fab fa-facebook"></i></a>
	</section>
</footer>

<?php
	if((isset($_SESSION['success']) || isset($_SESSION['err'])) && !isset($_SESSION['flash'])){
		$_SESSION['flash'] = true;
		exit();
	}

	if(isset($_SESSION['flash'])){
		unset($_SESSION['success'], $_SESSION['err'], $_SESSION['flash']);
	}

?>
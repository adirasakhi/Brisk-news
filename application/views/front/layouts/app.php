<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url("images/favicon/$favicon->photo") ?>" type="image/png">
	<title><?= $title ?> - CI</title>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url() ?>assets/front/css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/linericon/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/lightbox/simpleLightbox.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/nice-select/css/nice-select.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/animate-css/animate.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
	<!-- main css -->
	<link href="<?= base_url() ?>assets/front/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/front/css/styleborder.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!--preloader script  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!--preloader script end -->
	<!-- <link href="<?= base_url() ?>assets/front/css/styleloader.css" rel="stylesheet"> -->
	<style type="text/css">
		.preloader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background-color: #fff;
		}

		.preloader .loading {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			font: 14px arial;
		}

		.disclaimer {
			display: none;
		}
	</style>
	<script>
		$(document).ready(function() {
			$(".preloader").delay(2500).fadeOut();
		})
	</script>
</head>

<body>
	<div class="preloader">
		<div class="loading">
			<img src="<?= base_url() ?>images\loader\loading.gif">
		</div>
	</div>
	<!-- <img src="images/loader/trash.gif" alt="" class="loader"> -->
	<!--================ Navigation ================-->
	<?php $this->load->view('front/layouts/_navbar') ?>
	<!--================ End of Navigation ================-->

	<!--================ Content =================-->
	<?php $this->load->view('front/pages/' . $page) ?>
	<!--================ End Content =================-->

	<!--================ start footer Area  =================-->
	<?php $this->load->view('front/layouts/_footer') ?>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src=" <?= base_url() ?>assets/front/js/jquery-3.2.1.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/popper.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/bootstrap.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/stellar.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/isotope/isotope-min.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/vendors/jquery-ui/jquery-ui.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/jquery.ajaxchimp.min.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/mail-script.js"></script>
	<script src=" <?= base_url() ?>assets/front/js/theme.js"></script>
</body>

</html>
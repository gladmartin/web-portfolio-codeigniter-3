<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title> Glad Martin - <?= $title ?> </title>
	<meta name="description" content="Web Profile">
	<meta name="author" content="Glad Martin Silalahi">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
	<?= link_tag('assets/front/css/base.css') ?>
	<?= link_tag('assets/front/css/main.css') ?>
	<?= link_tag('assets/front/css/vendor.css') ?>

	<!-- script
   ================================================== -->
	<script src="<?= base_url() ?>assets/front/js/modernizr.js"></script>
	<script src="<?= base_url() ?>assets/front/js/pace.min.js"></script>

	<!-- favicons
	================================================== --> 
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/<?= $profile->photo ?>">

</head>
<body id="top">

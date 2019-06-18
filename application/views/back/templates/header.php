<!doctype html>
<html lang="en">

<head>
	<title>
		<?= $title ?> |
		<?= $this->check_user->getData()->nickname ?>
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/main.css">
	<!-- MY CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/my.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/images/<?= $this->check_user->getData()->photo ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/images/<?= $this->check_user->getData()->photo ?>">
	<!-- SWEETALERT -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/vendor/sweetalert/sweetalert2.min.css">
	<script src="<?= base_url() ?>assets/back/vendor/sweetalert/sweetalert2.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<b>ADMINISTRATOR</b>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-inbox"></i>
								<?php if ( $this->check_message->getCountUnread() > 0 ) :  ?>
								<span class="badge bg-danger">
									<?= $this->check_message->getCountUnread() ?>
								</span>
								<? endif ?>
							</a>
							<ul class="dropdown-menu notifications">
								<?php foreach(  $this->check_message->getAll() as $m ) : ?>
								<li>
									<a href="<?= base_url() ?>admin/message/detail/<?= $m->id ?>" class="notification-item <?= $m->seen == 0 ? 'unread' : '' ?>"><span class="dot bg-warning"></span><?= $m->name ?></a>
								</li>
								<? endforeach ?>
								<?php if ( $this->check_message->getCountUnread() > 0 ) :  ?>
								<li><a href="<?= base_url() ?>admin/message" class="more">See all message</a></li>
								<? else : ?>
								<li><a class="more">No Message yet</a></li>
								<? endif ?>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= base_url() ?>assets/images/<?= $this->check_user->getData()->photo ?>"
								 class="img-circle" alt="Avatar">
								<span>
									<?= $this->check_user->getData()->nickname ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url() ?>admin/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="<?= base_url() ?>admin/profile/changepassword"><i class="lnr lnr-lock"></i> <span>Change password</span></a></li>
								<li><a href="<?= base_url() ?>auth/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

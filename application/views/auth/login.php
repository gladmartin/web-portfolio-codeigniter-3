<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Glad Martin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/back/css/main.css"> 
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/back/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/back/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center">
									<b>ADMINISTRATOR</b>	
								</div>
								<p class="lead">Login</p>
                            </div>
                            <?= $this->session->userdata('message') ?>
							<form class="form-auth-small" action="" method="POST">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="identity" value="<?= $this->input->post('email') ?>" placeholder="Email">
                                    <?= form_error('identity') ?>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                                    <?= form_error('password') ?>
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox" name="remember" value="1">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Web Profile</h1>
							<p>Glad Martin</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>

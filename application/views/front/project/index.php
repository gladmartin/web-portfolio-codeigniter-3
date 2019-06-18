<!-- header 
   ================================================== -->
   <header>
		<div class="row">

			<div class="top-bar">
				<a class="menu-toggle" href="#"><span>Menu</span></a>

				<div class="logo">
					<a href="index.html">KARDS</a>
				</div>

				<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a href="<?= base_url() ?>" title="">Home</a></li> 
						<li><a href="<?= base_url() ?>auth/login" class="">Login</a></li>
					</ul>
				</nav>
			</div> <!-- /top-bar -->

		</div> <!-- /row -->
	</header> <!-- /header -->
<!-- intro section
   ================================================== -->
<section id="intro">

	<div class="intro-overlay"></div>

	<div class="intro-content">
		<div class="row">

			<div class="col-twelve">

				<h5>Hello.</h5>
				<h1>I'm
					<?= $profile->nickname ?>.</h1>

				<p class="intro-position">
					<span>Web Developer</span>
					<span>Framework Codeigniter</span>
					<span>Bootstrap</span>
				</p>

				<a class="button stroke smoothscroll" href="#portfolio" title="">Detail project</a>

			</div>

		</div>
	</div>

</section> <!-- /intro -->

<section id="portfolio">

	<div class="row section-intro">
		<div class="col-twelve">

			<h5>Detail project</h5>
			<h1>
				<?= $portfolio->title ?>
			</h1>
            <p class="lead"><?= $portfolio->description ?></p><br>            
            <p class="lead">Date : <?= $portfolio->date ?></p>

		</div>
	</div> <!-- /section-intro-->

	<div class="row portfolio-content">

		<div class="col-twelve">

			<!-- portfolio-wrapper -->
			<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
                <div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url() ?>assets/images/portfolio/<?= $portfolio->thumbnail ?>">
						 
					</div>
				</div> <!-- /folio-item -->
				<?php $i = 1; foreach ( $photos as $p ) : ?>
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url() ?>assets/images/portfolio/<?= $p->photo ?>">
						 
					</div>
				</div> <!-- /folio-item -->
				<? endforeach ?> 

			</div> <!-- /portfolio-wrapper -->

		</div> <!-- /twelve -->

	</div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->

<!-- contact
   ================================================== -->
<section id="contact">

	<div class="row section-intro">
		<div class="col-twelve">

			<h5>Contact</h5>
			<h1>I'd Love To Hear From You.</h1>


		</div>
	</div> <!-- /section-intro -->

	<div class="row contact-form">

		<div class="col-eight tab-full">

			<!-- form -->
			<form name="contactForm" id="contactForm" method="post" action="">
				<fieldset>

					<div class="form-field">
						<input name="name" type="text" id="name" placeholder="Name" value="" minlength="2" required="">
					</div>
					<div class="form-field">
						<input name="email" type="email" id="email" placeholder="Email" value="" required="">
					</div>
					<div class="form-field">
						<input name="subject" type="text" id="subject" placeholder="Subject" value="">
					</div>
					<div class="form-field">
						<textarea name="message" id="message" placeholder="message" rows="10" cols="50" required=""></textarea>
					</div>
					<div class="form-field">
						<button class="submitform">Submit</button>
						<div id="submit-loader">
							<div class="text-loader">Sending...</div>
							<div class="s-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>
					</div>

				</fieldset>
			</form> <!-- Form End -->

			<!-- contact-warning -->
			<div id="message-warning">
			</div>
			<!-- contact-success -->
			<div id="message-success">
				<i class="fa fa-check"></i>Your message was sent, thank you!<br>
			</div>

		</div> <!-- /col-twelve -->

		<div class="col-four tab-full" style="background:#151515">
			<div class="row contact-info">

				<div class="col-twelve tab-full">

					<div class="icon">
						<i class="icon-pin"></i>
					</div>

					<h5>Where to find me</h5>

					<p>
						<?= $profile->address ?>
					</p>

				</div>

				<div class="col-twelve tab-full">

					<div class="icon">
						<i class="icon-phone"></i>
					</div>

					<h5>Call Me At</h5>

					<p>Mobile / WhatsApp: <br>
						<?= $profile->phone ?><br>
					</p>

					<ul class="footer-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<br>
					<a href="<?= base_url() ?>" class="cp">
						<?= $profile->nickname ?></a> -
					<?= date('Y') ?>

				</div>

			</div> <!-- /contact-info -->
		</div>

	</div> <!-- /contact-form -->

</section> <!-- /contact -->

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
						<li class="current"><a class="smoothscroll" href="<?= base_url() ?>#intro" title="">Home</a></li>
						<li><a class="smoothscroll" href="<?= base_url() ?>#about" title="">About</a></li>
						<li><a class="smoothscroll" href="<?= base_url() ?>#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll" href="<?= base_url() ?>#contact" title="">Contact</a></li>
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

					<a class="button stroke smoothscroll" href="#about" title="">Read More</a>

				</div>

			</div>
		</div>
		<!-- /intro-content -->

		<!-- <ul class="intro-social">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>  -->
		<!-- /intro-social -->

	</section> <!-- /intro -->


	<!-- about section
   ================================================== -->
	<section id="about">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>About</h5>
				<h1>Let me introduce myself.</h1>

				<div class="intro-info">

					<img src="<?= base_url() ?>assets/images/<?= $profile->photo ?>" alt="Profile Picture">

					<p class="lead">
						<?= $profile->about ?>
					</p>
				</div>

			</div>
		</div> <!-- /section-intro -->

		<div class="row about-content">

			<div class="col-six tab-full">

				<h3>Profile</h3>
				<!-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi
					commodo ea magna pariatur nisi cillum.</p> -->

				<ul class="info-list">
					<li>
						<strong>Fullname:</strong>
						<span>
							<?= $profile->fullname ?></span>
					</li>
					<li>
						<strong>Birth Date:</strong>
						<span>
							<?= $profile->birth ?> </span>
					</li>
					<li>
						<strong>Job:</strong>
						<span>
							<?= $profile->job ?></span>
					</li>
					<li>
						<strong>Website:</strong>
						<span>
							<?= $profile->website ?></span>
					</li>
					<li>
						<strong>Email:</strong>
						<span>
							<?= $profile->email ?></span>
					</li>

				</ul> <!-- /info-list -->

			</div>

			<div class="col-six tab-full">

				<h3>Skills</h3>
				<p>To convice you to use our service, here are the web programming skills that I have.</p>

				<ul class="skill-bars">
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>HTML5</strong>
					</li>
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>CSS3</strong>
					</li>
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>JQuery</strong>
					</li>
					<li>
						<div class="progress percent75"><span>75%</span></div>
						<strong>PHP</strong>
					</li>

				</ul> <!-- /skill-bars -->

			</div>

		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
			</div>
		</div>

	</section> <!-- /process-->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio" class="grey-section">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>Portfolio</h5>
				<h1>Check Out Some of My Works.</h1>

			</div>
		</div> <!-- /section-intro-->

		<div class="row portfolio-content">

			<div class="col-twelve">

				<!-- portfolio-wrapper -->
				<div id="folio-wrapper" class="block-1-2 block-mob-full stack">

					<?php $i = 1; foreach ( $portfolio as $p ) : ?>
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url() ?>assets/images/portfolio/<?= $p->thumbnail ?>" alt="<?= $p->title ?>">
							<a href="#modal-<?= $i++ ?>" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">
											<?= $p->title ?>
										</h3>
										<span class="folio-types">
											<?= $p->category ?>
										</span>
									</div>
								</div>
							</a>
						</div>
					</div> <!-- /folio-item -->
					<? endforeach ?>

					<!-- modal popups - begin
	            ============================================================= -->
					<?php $j = 1; foreach( $portfolio as $po ) :  ?>
					<div id="modal-<?= $j++ ?>" class="popup-modal slider mfp-hide">

						<div class="media">
							<img src="<?= base_url() ?>assets/images/portfolio/<?= $po->thumbnail ?>" alt="<?= $po->title ?>" />
						</div>

						<div class="description-box">
							<h4>
								<?= $po->title ?>
							</h4>
							<p>
								<?= $po->description ?>
							</p>

							<div class="categories">
								<?= $po->category ?><br>
								project date = <?= $po->date ?>
							</div>
						</div>

						<div class="link-box">
							<a href="<?= base_url() ?>project/detail/<?= $po->id ?>">More</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>

					</div> <!-- /modal-01 -->
					<? endforeach ?>

					<!-- modal popups - end
	            ============================================================= -->

				</div> <!-- /portfolio-wrapper -->

			</div> <!-- /twelve -->

		</div> <!-- /portfolio-content -->

	</section> <!-- /portfolio -->

	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
			<div class="col-twelve"> 
				<h1>Why Do You Have To Choose Me?</h1>
				<P class="lead">Because I'm always there for you, whenever you need I'm always ready to help you 1 * 24 hours</P>

			</div>
		</div> <!-- /section-intro -->

		<div class="row services-content">

			<div id="owl-slider" class="owl-carousel services-list">

				<div class="service">

					<span class="icon"><i class="fa fa-phone"></i></span>

					<div class="service-content">

						<h3>Support 24 hours</h3>

						<p class="desc">
							1 x 24 hours service <br>
							Question and Ask <br>
							Support remote <br>
							Real time <br>
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="fa fa-flash"></i></span>

					<div class="service-content">

						<h3>Fast and Precise Response</h3>

						<p class="desc">
							Right handler <br>
							Reliable <br>
							Consistant <br>
						</p>

					</div>

				</div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="fa fa-gears"></i></span>

					<div class="service-content">

						<h3>Maintenance</h3>

						<p class="desc">
							Save time <br>
							Save money <br>
							repair information
						</p>

					</div>

				</div> <!-- /service -->
 

			</div> <!-- /services-list -->

		</div> <!-- /services-content -->

	</section> <!-- /services -->


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

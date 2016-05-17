<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Savoie_Volailles_Home
 */

?>

<!--Contact Section-->
<section id="contact">
	<div class="container content-md g-heading-v7 text-center ">
		<h2 class="h2 g-mb-70"><em class="block-name">Nous</em>contacter</h2>

		<!-- form and contatc information -->
		<div class="row">
			<div class="col-md-9 col-sm-6 form no-side-padding">
				<form action="#" method="post" id="sky-form3" class="sky-form contact-style">
					<fieldset>
						<div class="row margin-bottom-30">
							<div class="col-md-6 col-md-offset-0">
								<div>
									<input type="text" name="first_name" id="name" class="form-control"
									       placeholder="Prenom">
								</div>
							</div>
							<div class="col-md-6 col-md-offset-0">
								<div>
									<input type="text" name="last_name" id="name" class="form-control"
									       placeholder="Nom">
								</div>
							</div>
						</div>

						<div class="row margin-bottom-30">
							<div class="col-md-6 col-md-offset-0">
								<div>
									<input type="text" name="email" id="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6 col-md-offset-0">
								<div>
									<input type="text" name="phone" id="phone" class="form-control"
									       placeholder="Téléphone">
								</div>
							</div>
						</div>
						<div class="row margin-bottom-30">
							<div class="col-md-6 col-md-offset-0">
								<div>
									<input type="text" name="subject" id="subject" class="form-control"
									       placeholder="Votre demande">
								</div>
							</div>

						</div>

						<div class="row margin-bottom-30">
							<div class="col-md-12 col-md-offset-0">
								<div>
									<textarea rows="4" name="message" id="message" class="form-control g-textarea-noresize" placeholder="Votre Message"></textarea>
								</div>
							</div>
						</div>

						<p><button type="submit" class="btn-u btn-u-lg btn-u-bg-default
						btn-u-upper">Envoyer</button></p>
					</fieldset>

					<div class="message">
						<i class="rounded-x fa fa-check"></i>
						<p>Merci!</p>
					</div>
				</form>
			</div>

			<div class="col-md-3 col-sm-6 contact-list">
				<ul class="list-unstyled margin-bottom-30">
					<li><span aria-hidden="true" class="icon-directions icon"></span></li>
					<li class="first-item">Address</li>
					<li class="second-item">652 Rue Du Centre
						74330 Epagny</li>
				</ul>

				<ul class="list-unstyled margin-bottom-30">
					<li><span aria-hidden="true" class="icon-call-in icon"></span></li>
					<li class="first-item">Numero Téléphone</li>
					<li class="second-item">04 50 22 59 23</li>
				</ul>

				<ul class="list-unstyled margin-bottom-30">
					<li><span aria-hidden="true" class="icon-envelope-open icon"></span></li>
					<li class="first-item">Email</li>
					<li class="second-item">contact@savoievolailles.com</li>
				</ul>

				<!-- <ul class="list-unstyled margin-bottom-30">
					<li><span aria-hidden="true" class="icon-earphones-alt icon"></span></li>
					<li class="first-item">Toll Free</li>
					<li class="second-item">+4586 802 4581</li>
				</ul> -->
			</div>
		</div>
	</div>

	<div class="container-fluid no-side-padding">
		<div id="map-wrapper">
			<div id="map"></div>
		</div>
	</div>

	<!-- copyrights -->
	<div class="copyrights container-fluid bg-color-com page-scroll">
		<div clas="container">
			<a class="footer-logo" href="#intro">
				<img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-light.png" alt="Logo">
			</a>
			<ul class="list-inline footer-list">
<!--				<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
				<li><a href="https://www.facebook.com/savoie.volailles/"><i class="fa fa-facebook"></i></a></li>
<!--				<li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
			</ul>
			<a class="my-contact" href="http://imflavio.com">Flavio Carvalho</a>
		</div>
	</div>
</section>
<!--End of Contact Section-->


<!-- JS Global Compulsory -->
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/smoothScroll.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/jquery.easing.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/pace/pace.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/modernizr.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/backstretch/jquery.backstretch.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script><script src="<?php bloginfo('stylesheet_directory');?>/assets/js/plugins/gmaps-ini.js"></script>

<!-- JS Page Level-->
<script src="<?php bloginfo('stylesheet_directory');?>/main-assets/js/one.app.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/plugins/pace-loader.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/plugins/owl-carousel2.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/plugins/cube-portfolio-lightbox.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/plugins/promo.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/forms/contact.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js"></script>

<script>
	$(function() {
		App.init();
		OwlCarousel.initOwlCarousel();
		ContactForm.initContactForm();
	});
</script>
<!--[if lt IE 10]>
<script 
	src="<?php bloginfo('stylesheet_directory');?>/main-assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->



<?php wp_footer(); ?>

</body>
</html>

<?php


	$brands_loop = new WP_Query(
		array(
			'post_type' => 'brand',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		) );


?>


<!--Brands Section-->
<section id="<?php the_field( 'brands_navigation' , 142); ?>">
	<div class="container-fluid bg-color-com service-section">
		<div class="container content-md">

			<div class="row g-mb-70 g-heading-v7 text-center">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<h2 class="h2 g-color-white g-mb-30"><em class="block-name"><?php the_field( 'brands_sur-titre' , 142); ?></em><?php the_field( 'brands_title' , 142); ?></h2>
					<p class="g-color-white-darker"><?php the_field( 'brands_text' , 142); ?></p>
				</div>
			</div>

			<!-- Owl Carousel v4 we create amazing things-->
			<div class="owl-carousel-v4 owl-theme">
				<div class="owl-slider-v4">
					<?php

						while ( $brands_loop->have_posts() ) : $brands_loop->the_post();


					?>
					<div class="item">
						<img src="<?php the_field( 'brand_image' ); ?>" alt="">
						<h3 class="owl-h3"><?php the_field( 'brand_name' ); ?></h3>
						<p class="owl-p g-color-white-darker"><?php the_field( 'brand_text' ); ?></p>
						<?php if( get_field( "brand_url" ) ): ?>
							<a href="<?php the_field( 'brand_url' ); ?>" class="owl-a">Visiter</a>
						<?php endif;?>
					</div>
					<?php endwhile;?>

				</div>
			</div>
			<!-- End Owl Carousel v4 -->
		</div>
	</div>
</section>
<!--End of Brands Section-->
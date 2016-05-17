<?php


	$features_loop = new WP_Query(
		array(
			'post_type' => 'feature',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		) );


?>

<!--Features Section-->
<section id="<?php the_field( 'features_navigation' , 142); ?>">
	<div class="container-fluid bg-color-com team-section">
		<div class="container content-md g-heading-v7 text-center">
			<h2 class="h2 g-mb-70 g-color-white"><em class="block-name"><?php the_field( 'features_sur-titre' , 142); ?></em><?php the_field( 'features_title' , 142); ?></h2>

			<!-- Owl Carousel v4 team -->
			<div class="owl-carousel-v4 owl-theme">
				<div class="owl-slider-v4-team">
					<?php

						while ( $features_loop->have_posts() ) : $features_loop->the_post();


					?>
					<div class="item">
						<img class="img-responsive" src="<?php the_field( 'feature_image' ); ?>" alt="">
						<small class="owl-small"><?php the_field( 'feature_name' ); ?></small>
						<span class="owl-span"><?php the_field( 'feature_price' ); ?></span>
						<small class="owl-small owl-small-2"><?php the_field( 'feature_text' ); ?></small>
					</div>
					<?php endwhile;?>

				</div>
			</div>
			<!-- End Owl Carousel v4 -->
		</div>
	</div>
</section>
<!--End of Team Section-->
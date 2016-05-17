<?php


	$slide_loop = new WP_Query(
		array(
			'post_type' => 'slide',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		) );


?>

<div class="owl-carousel owl-slider-main">

	<?php

		while ( $slide_loop->have_posts() ) : $slide_loop->the_post();


	?>

	<div class="item" id="backgroundSlide"
	     style="background: url('<?php the_field( 'slide_image' ); ?>')
		     no-repeat; background-size: cover;
		     background-position: center;">
		<div class="main-slide-inner">
			<h1 class="slide-h1"><?php the_field( 'slide_text' ); ?></h1>
			<a href="<?php the_field( 'slide_button_link' ); ?>" class="slide-btn"><?php the_field( 'slide_button_text'
				); ?></a>

		</div>
	</div>
	<?php endwhile;?>

</div>

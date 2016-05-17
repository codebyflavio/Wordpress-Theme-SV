<?php


	$products_loop = new WP_Query(
		array(
			'post_type' => 'products',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		) );


?>

<!--Products Section-->
<section id="<?php the_field( 'products_navigation' , 142); ?>">
	<div class="container-fluid no-side-padding content-md">
		<div class="container g-heading-v7 text-center g-mb-70">
			<h2 class="h2"><em class="block-name"><?php the_field( 'products_sur-titre' , 142); ?></em><?php the_field( 'products_titre' , 142); ?></h2>
		</div>


		<div id="grid-container">
			<?php

				while ( $products_loop->have_posts() ) : $products_loop->the_post();


			?>
			<div class="cbp-item">
				<!-- data-title attribute will be used to populate lightbox caption -->
				<div class="cbp-caption">
					<a class="cbp-lightbox" data-title="<h3><em><?php the_field( 'product_name' ); ?></em><?php the_field( 'product_caption' ); ?></h3>" href="<?php the_field( 'product_image' ); ?>">
						<img src="<?php the_field( 'product_image' ); ?>">
						<div class="popup-title">
							<h3><em><?php the_field( 'product_name' ); ?></em><?php the_field( 'product_caption' );
								?></h3>
						</div>
					</a>
				</div>
			</div>
			<?php endwhile;?>
		</div>
	</div>
</section>
<!--End of Products Section-->
<?php


	$store_loop = new WP_Query(
		array(
			'post_type' => 'store',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		) );


?>
<!--Stores Section-->
<section id="<?php the_field( 'stores_navigation' , 142); ?>">
	<div class="container content-lg">
		<div class="g-heading-v7 text-center g-mb-70">
			<h2 class="h2"><em class="block-name"><?php the_field( 'stores_sur-titre' , 142); ?></em><?php the_field( 'stores_title', 142 ); ?></h2>
		</div>


		<div class="row equal-height-columns">
			<?php

				while ( $store_loop->have_posts() ) : $store_loop->the_post();


				?>

				<a href="#" data-toggle="modal" data-target="#myModal-<?php echo get_the_ID(); ?>">

					<div class="col-md-3 arch-service arch-service-1 store">
						<div class="arch-service-in img-hover-1 equal-height-column">
							<img class="img-store" src="<?php the_field( 'store_thumbnail' ); ?>">
							<h3 id="store-title"><?php the_field( 'store_name' ); ?></h3>
							<p id="store-horaire"><?php the_field( 'store_horaire' ); ?></p>
							<span aria-hidden="true" class="icon" data-icon="&#xe01e;"></span>
							<p><?php the_field( 'store_email' ); ?></p>
							<span aria-hidden="true" data-icon="&#xe048;" class="icon"></span>
							<p><?php the_field( 'store_phone' ); ?></p>

						</div>
					</div>


				</a>
			<?php endwhile; ?>

		</div>
<!--		MODAL-->
		<?php while ( $store_loop->have_posts() ) :	$store_loop->the_post(); ?>
		<div class="modal fade bs-example-modal-lg" id="myModal-<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog"
		     aria-labelledby="myModalLabel-<?php echo get_the_ID(); ?>" aria-hidden="true">
			<button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i>
			</button>
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-body">
						<div class="modal-top margin-bottom-40">
							<img src="<?php the_field( 'store_image' ); ?>">
						</div>

						<div class="modal-bot g-heading-v7">

							<div class="g-heading-v7 text-center g-mb-70">
								<h2 class="h2" id="modal-h2"><?php the_field( 'store_name' ); ?></h2>
							</div>



								<p class="margin-bottom-30 modal-p"><?php the_field( 'store_text' ); ?></p>


							<p class="margin-bottom-30 modal-p"><?php the_field( 'store_horaire' ); ?></p>

							<div>
								<div class="container-fluid no-side-padding">
									<div class="map-wrapper">
										<input class="map-address" type="hidden" value="<?php the_field( 'store_address' ); ?>">
										<div class="map_modal"></div>
									</div>
								</div>
							</div>

							<span aria-hidden="true" class="icon modal-icon" data-icon="&#xe01e;"></span>
							<p><?php the_field( 'store_email' ); ?></p>
							<span aria-hidden="true" data-icon="&#xe048;" class="icon"></span>
							<p><?php the_field( 'store_phone' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

	</div>
</section>
<!--End of Stores Section-->
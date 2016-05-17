<?php
	$job_loop = new WP_Query(
		array(
			'post_type' => 'job',
			'orderby'   => 'post_id',
			'order'     => 'ASC'
		)
	)	;
?>

<!--Recruitment Section-->
<section id="<?php the_field( 'jobs_navigation' , 142); ?>">
	<div class="awards-section">
		<div class="container content-md">
			<div class="row">
				<div class="col-md-3 g-heading-v7 text-center">
					<h2 class="h2 g-mb-30"><em class="block-name"><?php the_field( 'jobs_sur-titre' , 142); ?></em><?php the_field( 'jobs_title' , 142); ?></h2>
					<p class="g-mb-30"><?php the_field( 'jobs_text' , 142); ?></p>
				</div>


				<div class="col-md-9 awards-desc">
					<?php

						while ( $job_loop->have_posts() ) : $job_loop->the_post();


					?>
					<div class="row">
						<div class="col-md-4 award-div">
							<img src="<?php the_field( 'job_image' ); ?>" alt="">
							<em><?php the_field( 'job_caption' ); ?></em>
							<h3><?php the_field( 'job_name' ); ?></h3>
							<p><?php the_field( 'job_text' ); ?></p>
						</div>
						<?php endwhile; ?>

					</div>
				</div>
			</div>
		</div>


	</div>
</section>
<!--End of Recruitment Section-->
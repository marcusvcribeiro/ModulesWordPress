<?php 
$testimonials = get_field('testimonials-list', 'option');
if( $testimonials ): ?>
<!--= TESTIMONIALS =-->
<section class="testimonials main-padding">
	<div class="container">
		<ul class="testimonials-list owl-carousel">
			<?php foreach( $testimonials as $post): ?>
			<?php setup_postdata($post); ?>
			<li>
				<div class="row">
					<div class="col-sm-3">
						<figure>
							<?php the_post_thumbnail('thumbnail'); ?>
						</figure>
					</div>
					<!-- /.col-sm-3 -->

					<div class="col-sm-9">
						<div class="wrap">
							<div class="text">
								<?php the_content(); ?>
							</div>
							<!-- /.text -->

							<p class="name">- <?php the_title(); ?></p>
						</div>
						<!-- /.wrap -->
					</div>
					<!-- /.col-sm-9 -->
				</div>
				<!-- /.row -->
			</li>
			<?php endforeach; ?>
		</ul>
		<!-- /.testimonials-list -->
	</div>
	<!-- /.container -->
</section>
<!-- /.testimonials -->
<?php endif; wp_reset_postdata(); ?>
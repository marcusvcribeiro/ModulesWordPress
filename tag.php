<?php get_header('internal'); ?>

	<!--= PAGE TITLE =-->
	<?php $header_background = get_field('header-background');
	if($header_background): ?>
		<section class="page-title" style="background-image: url(<?php echo $header_background; ?>);">
	<?php else: ?>
		<?php $header_option = get_field('header-background', 'option'); ?>
		<section class="page-title" style="background-image: url(<?php echo $header_option; ?>);">
	<?php endif; ?>
		<div class="container">
			<h1><?php printf(single_tag_title( '', false ) ); ?></h1>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.page-title -->

	
	<!--= BLOG =-->
	<div class="blog main-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php if ( have_posts() ) : ?>

			        <?php while ( have_posts() ) : the_post();

		                get_template_part( 'content', get_post_format() );

		            endwhile; ?>

					<?php
			            the_posts_pagination( array(
			                'prev_text'          => __( '' ),
			                'next_text'          => __( '' ),
			            ) );
			        ?>

					<?php else: get_template_part( 'content', 'none' ); endif; ?>
				</div>
				<!-- /.col-md-9 -->

				<div class="sidebar col-md-3">
					<?php get_template_part('sidebar'); ?>
				</div>
				<!-- /.sidebar -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.blog -->
	

<?php get_footer(); ?>
<?php get_header('internal'); ?>

	<?php get_template_part('top-header'); ?>

	<?php while ( have_posts() ) : the_post();
	$content = get_the_content();
    if(trim($content) != ""): ?>
	<section class="content-image main-padding">
		<div class="container">
			<div class="the-content">
				<?php the_content(); ?>
			</div>
			<!-- /.the-content -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.content-image -->
	<?php endif; endwhile; ?>
	
	<?php get_template_part('modules'); ?>
	

<?php get_footer(); ?>
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
			<h1>Blog</h1>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.page-title -->

	
	<!--= BLOG =-->
	<div class="blog main-padding">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<article class="the-post the-single">
				<figure>
					<?php the_post_thumbnail('large'); ?>
				</figure>

				<h2><?php the_title(); ?></h2>

				<div class="the-content">
					<?php the_content(); ?>
				</div>
				<!-- /.the-content -->
			</article>
			<!-- /.the-post -->
			<?php endwhile; ?>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.blog -->	

<?php get_footer(); ?>
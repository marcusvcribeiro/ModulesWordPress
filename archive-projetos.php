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
			<h1>Projetos</h1>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.page-title -->

	<?php if ( have_posts() ) : ?>
	<!--= PROJECTS =-->
	<section class="projects main-padding">
		<div class="container">
			<ul class="main-projects-list row">
				<?php while ( have_posts() ) : the_post(); ?>
				<li class="col-sm-4">
					<figure>
						<?php the_post_thumbnail('project-small'); ?>
					</figure>

					<div class="wrap">
						<h3><?php the_title(); ?></h3>

						<p><?php echo get_excerpt(210); ?></p>
					</div>
					<!-- /.wrap -->

					<a href="<?php the_permalink(); ?>" class="transparent-anchor"></a>
				</li>
				<?php endwhile; ?>
			</ul>
			<!-- /.main-projects-list -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.projects -->
	<?php else: ?>
		<?php get_template_part('content-none'); ?>
	<?php endif; ?>

	
	<?php get_template_part('testimonials'); ?>
	

<?php get_footer(); ?>
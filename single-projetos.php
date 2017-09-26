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
	

	<?php while ( have_posts() ) : the_post(); ?>
	<!--= PROJECTS =-->
	<section class="projects-internal main-padding">
		<div class="container">
			<h2 class="section-title orange"><?php the_title(); ?></h2>

			<div class="project-preview-internal hidden-xs">
				<?php $project_before = get_field('photo-before'); ?>
				<img src="<?php echo $project_before['sizes']['project-large']; ?>" alt="<?php echo $project_before['alt']; ?>" width="<?php echo $project_before['sizes']['project-large-width']; ?>" height="<?php echo $project_before['sizes']['project-large-height']; ?>">

				<?php $project_after = get_field('photo-after'); ?>
				<img src="<?php echo $project_after['sizes']['project-large']; ?>" alt="<?php echo $project_after['alt']; ?>" width="<?php echo $project_after['sizes']['project-large-width']; ?>" height="<?php echo $project_after['sizes']['project-large-height']; ?>">
			</div>
			<!-- /.project-preview -->

			<div class="project-preview-mobile visible-xs">
				<a href="<?php echo $project_before['url']; ?>" class="view-preview"><img src="<?php echo $project_before['sizes']['project-large']; ?>" alt="<?php echo $project_before['alt']; ?>" width="<?php echo $project_before['sizes']['project-large-width']; ?>" height="<?php echo $project_before['sizes']['project-large-height']; ?>"></a>

				<a href="<?php echo $project_after['url']; ?>" class="hidden view-preview"><img src="<?php echo $project_after['sizes']['project-large']; ?>" alt="<?php echo $project_after['alt']; ?>" width="<?php echo $project_after['sizes']['project-large-width']; ?>" height="<?php echo $project_after['sizes']['project-large-height']; ?>"></a>
			</div>
			<!-- /.project-preview-mobile -->

			<div class="project-description the-content">
				<?php the_content(); ?>
			</div>
			<!-- /.project-description -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.projects-internal -->
	<?php endwhile; ?>

	
	<?php
	query_posts('post_type=projetos&posts_per_page=10');

	if ( have_posts() ) : ?>
	<!--= PROJECTS CAROUSEL =-->
	<section class="projects-carousel main-padding">
		<div class="container">
			<h2 class="section-title orange">Mais projetos</h2>

			<ul class="projects-carousel-list">
				<?php while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('project-small'); ?></li>
				<?php endwhile; ?>
			</ul>
			<!-- /.projects-carousel-list -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.projects-carousel -->
	<?php endif; wp_reset_query(); ?>
	

<?php get_footer(); ?>
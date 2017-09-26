<!--= PAGE TITLE =-->
<?php $header_background = get_field('header-background');
if($header_background): ?>
	<section class="page-title" style="background-image: url(<?php echo $header_background; ?>);">
<?php else: ?>
	<?php $header_option = get_field('header-background', 'option'); ?>
	<section class="page-title" style="background-image: url(<?php echo $header_option; ?>);">
<?php endif; ?>
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
	<!-- /.container -->
</section>
<!-- /.page-title -->
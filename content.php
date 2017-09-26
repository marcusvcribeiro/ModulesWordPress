<article class="the-post">
	<figure class="img-zoom">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
	</figure>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="the-content">
		<?php the_excerpt(); ?>
	</div>
	<!-- /.the-content -->

	<div class="clearfix">
		<a href="<?php the_permalink(); ?>" class="btn-main hvr-shutter-out-horizontal pull-right">Leia mais</a>
	</div>
	<!-- /.clearfix -->
</article>
<!-- /.the-post -->
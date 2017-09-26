<?php
/*
Template Name: Blog
*/
?>

<?php get_header('internal'); ?>

	<?php get_template_part('top-header'); ?>

	
	<!--= BLOG =-->
	<div class="blog main-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php
			        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
			        elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
			        else { $paged = 1; }

			        query_posts('posts_per_page=10&paged=' . $paged);
			        if ( have_posts() ) : ?>

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
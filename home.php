<?php
/*
Template Name: Página Inicial
*/
?>

<?php get_header(); ?>


	<?php if( have_rows('slider-repeater') ): ?>
	<!--= SLIDER =-->
	<div id="slider" class="clearfix hidden-xs">
		<!-- slider revolution start -->
		<div class="slider-banner-container">
			<div class="slider-banner-fullwidth">
				<ul class="slides">
					<?php while ( have_rows('slider-repeater') ) : the_row(); ?>
					<li data-transition="boxfade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
					
					<!-- main image -->
					<?php $banner_image = get_sub_field('image'); ?>
					<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" width="<?php echo $banner_image['width']; ?>" height="<?php echo $banner_image['height']; ?>" data-bgposition="center bottom"  data-bgrepeat="no-repeat" data-bgfit="cover">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption my-caption-title sfb fadeout text-<?php the_sub_field('banner-align'); ?> tp-resizeme"
						data-x="<?php the_sub_field('banner-align'); ?>"
						data-y="center"
						data-voffset="-100"
						data-speed="500"
						data-start="1000"
						data-easing="easeOutQuad"><h1><?php the_sub_field('title'); ?></h1>
					</div>

					<?php $banner_desc = get_sub_field('desc');
					if($banner_desc): ?>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption my-caption-text sfb fadeout text-<?php the_sub_field('banner-align'); ?> tp-resizeme"
						data-x="<?php the_sub_field('banner-align'); ?>"
						data-y="center"
						data-speed="500"
						data-start="1300"
						data-easing="easeOutQuad"
						data-endspeed="600"><p><?php echo $banner_desc; ?></p>
					</div>
					<?php endif; ?>

					<?php $banner_link = get_sub_field('link');
					if($banner_link): ?>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption my-caption-button sfb fadeout text-<?php the_sub_field('banner-align'); ?> tp-resizeme"
						data-x="<?php the_sub_field('banner-align'); ?>"
						data-y="center"
						data-voffset="100"
						data-speed="500"
						data-start="1600"
						data-easing="easeOutQuad"
						data-endspeed="600"><a href="<?php echo $banner_link; ?>" class="hvr-shutter-out-horizontal">Saiba mais</a>
					</div>
					<?php endif; ?>

					</li>
					<!-- slide 1 end -->
					<?php endwhile; ?>
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!-- slider revolution end -->
	</div>
	<!-- #slider -->
	<?php endif; ?>

	<?php get_template_part('modules'); ?>

<?php get_footer(); ?>
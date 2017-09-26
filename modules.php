<?php if( have_rows('modules') ): ?>
	<?php while ( have_rows('modules') ) : the_row(); ?>

		<?php //FORM
	    if( get_row_layout() == 'form' ): ?>
		<section class="rental main-padding">
			<div class="container">
				<?php $module_title = get_sub_field('title');
				if($module_title): ?>
				<h2 class="section-title"><?php echo $module_title; ?></h2>
				<?php endif; ?>

				<?php the_sub_field('my-form'); ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.rental -->


		<?php //DEPOIMENTOS
	    elseif( get_row_layout() == 'testimonials' ): ?>
	    <?php get_template_part('testimonials'); ?>


	    <?php //PROJECTS
	    elseif( get_row_layout() == 'projects' ): ?>
    	<?php $projects_background = get_sub_field('projects-background');
    	if($projects_background): ?>
			<section class="projects-home main-padding parallax" style="background-image: url(<?php echo $projects_background; ?>);">
		<?php else: ?>
			<section class="projects-home main-padding parallax">
		<?php endif; ?>
			<div class="container">
				<?php $module_title = get_sub_field('title');
				if($module_title): ?>
				<h2 class="projects-title text-center"><?php echo $module_title; ?></h2>
				<?php endif; ?>

				<?php 
				$projects = get_sub_field('projects-list');
				if( $projects ): ?>
				<ul class="projects-list owl-carousel">
					<?php foreach( $projects as $post): ?>
					<?php setup_postdata($post); ?>
					<li>
						<div class="row">
							<div class="col-md-5">
								<div class="content clearfix">
									<span class="content-fix"></span>
									<div class="wrap">
										<h3><?php the_title(); ?></h3>

										<p><?php echo get_excerpt(700); ?></p>

										<div class="more">
											<span class="skew-fix"></span>
											<a href="<?php the_permalink(); ?>">Ver projeto completo</a>
										</div>
										<!-- /.more -->
									</div>
									<!-- /.wrap -->
								</div>
								<!-- /.content -->
							</div>
							<!-- /.col-md-5 -->

							<div class="col-md-7">
								<div class="project-preview">
									<?php $project_before = get_field('photo-before'); ?>
									<img src="<?php echo $project_before['sizes']['project-medium']; ?>" alt="<?php echo $project_before['alt']; ?>" width="<?php echo $project_before['sizes']['project-medium-width']; ?>" height="<?php echo $project_before['sizes']['project-medium-height']; ?>">
									
									<?php $project_after = get_field('photo-after'); ?>
									<img src="<?php echo $project_after['sizes']['project-medium']; ?>" alt="<?php echo $project_after['alt']; ?>" width="<?php echo $project_after['sizes']['project-medium-width']; ?>" height="<?php echo $project_after['sizes']['project-medium-height']; ?>">
								</div>
								<!-- /.project-preview -->
							</div>
							<!-- /.col-md-7 -->
						</div>
						<!-- /.row -->
					</li>
					<?php endforeach; ?>
				</ul>
				<!-- /.projects-list -->
				<?php endif; wp_reset_postdata(); ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.projects-home -->


		<?php //MOTIVOS
	    elseif( get_row_layout() == 'features' ): ?>
		<section class="features main-padding">
			<div class="container">
				<?php $module_title = get_sub_field('title');
				if($module_title): ?>
				<h2 class="section-title text-center"><?php echo $module_title; ?></h2>
				<?php endif; ?>

				<?php $features_columns = get_sub_field('features-columns'); ?>
				<?php if( have_rows('features-repeater') ): ?>
				<ul class="features-list">
					<?php while ( have_rows('features-repeater') ) : the_row(); ?>
					<li class="columns<?php echo $features_columns; ?>">
						<i class="features-icon" style="background-image: url(<?php the_sub_field('icon'); ?>);"></i>
						<h3 class="uppercase"><?php the_sub_field('title'); ?></h3>

						<?php $features_text = get_sub_field('text');
						if($features_text): ?>
						<p><?php echo $features_text; ?></p>
						<?php endif; ?>

						<?php $features_link = get_sub_field('link');
						if($features_link): ?>
						<a href="<?php echo $features_link; ?>" class="transparent-anchor"></a>
						<?php endif; ?>
					</li>
					<?php endwhile; ?>
				</ul>
				<!-- /.features-list -->
				<?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.features -->

		<?php //CONTENT + IMAGE
	    elseif( get_row_layout() == 'content-image' ): ?>
	    <?php $content_align = get_sub_field('content-align'); ?>
	    <?php $image_border = get_sub_field('image-border');
	    if($image_border == 'yes'): ?>
	    <section class="content-image text-<?php echo $content_align; ?> main-padding">
		<?php else: ?>
		<section class="content-image <?php echo $image_border; ?> text-<?php echo $content_align; ?> main-padding">
		<?php endif; ?>
			<div class="container">
				<div class="row">
					<?php if($content_align == 'right'): ?>
					<div class="col-md-6">
						<figure class="text-left">
							<?php $content_image = get_sub_field('image'); ?>
							<img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>" width="<?php echo $content_image['width']; ?>" height="<?php echo $content_image['height']; ?>">
						</figure>
					</div>
					<!-- /.col-md-6 -->

					<div class="col-md-6">
						<div class="the-content content">
							<?php the_sub_field('text'); ?>
						</div>
						<!-- /.the-content -->

						<?php $content_link = get_sub_field('link');
						if($content_link): ?>
						<a href="<?php echo $content_link; ?>" class="btn-main hvr-shutter-out-horizontal"><?php the_sub_field('button'); ?></a>
						<?php endif; ?>
					</div>
					<!-- /.col-md-6 -->

					<?php else: ?>

					<div class="col-md-6">
						<div class="the-content content">
							<?php the_sub_field('text'); ?>
						</div>
						<!-- /.the-content -->

						<?php $content_link = get_sub_field('link');
						if($content_link): ?>
						<a href="<?php echo $content_link; ?>" class="btn-main hvr-shutter-out-horizontal"><?php the_sub_field('button'); ?></a>
						<?php endif; ?>
					</div>
					<!-- /.col-md-6 -->

					<div class="col-md-6">
						<figure class="text-left">
							<?php $content_image = get_sub_field('image'); ?>
							<img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>" width="<?php echo $content_image['width']; ?>" height="<?php echo $content_image['height']; ?>">
						</figure>
					</div>
					<!-- /.col-md-6 -->
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.content-image -->


		<?php //CONTENT
	    elseif( get_row_layout() == 'content' ): ?>
	    <section class="content-image main-padding">
			<div class="container">
				<div class="the-content">
					<?php the_sub_field('the-content'); ?>
				</div>
				<!-- /.the-content -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.content-image -->


		<?php //SERVIÇOS
	    elseif( get_row_layout() == 'services' ): ?>
	    <section class="services main-padding">
			<div class="container">
				<?php if( have_rows('services-repeater') ): ?>
				<ul class="services-list row">
					<?php while ( have_rows('services-repeater') ) : the_row(); ?>
					<li class="col-sm-4">
						<div class="wrap">
							<h3><?php the_sub_field('title'); ?></h3>

							<?php $service_desc = get_sub_field('desc');
							if($service_desc): ?>
							<p><?php echo $service_desc; ?></p>
							<?php endif; ?>

							<?php $service_link = get_sub_field('link');
							if($service_link): ?>
							<a href="<?php echo $service_link; ?>" class="transparent-anchor"></a>
							<?php endif; ?>
						</div>
						<!-- /.wrap -->
					</li>
					<?php endwhile; ?>
				</ul>
				<!-- /.services-list -->
				<?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.services -->


		<?php //TABS
	  	elseif( get_row_layout() == 'tabs' ): ?>
		<!--= TABS =-->
		<div class="tabs main-padding module">
			<div class="container">
				<?php $section_title = get_sub_field('title');
				if($section_title): ?>
					<h2 class="section-title text-center"><?php echo $section_title; ?></h2>
				<?php endif; ?>
				
				<?php if( have_rows('tabs-repeater') ): ?>
			  <ul>
			  	<?php $tabs_count = 1; while ( have_rows('tabs-repeater') ) : the_row(); ?>
			    <li><a href="#tabs-<?php echo $tabs_count++; ?>"><?php the_sub_field('tab-title'); ?></a></li>
			    <?php endwhile; ?>
			  </ul>

			  <span class="clearfix"></span>
				
				<?php $tabs_count = 1; while ( have_rows('tabs-repeater') ) : the_row(); ?>
			 	 <div id="tabs-<?php echo $tabs_count++; ?>" class="the-content clearfix">
			    	<?php the_sub_field('tab-content'); ?>
			  	</div>
				<?php endwhile; ?>

				<?php endif; ?>
		  </div>
			<!-- /.container -->
		</div>
		<!-- /#tabs -->


		<?php //CALL TO ACTION
	  	elseif( get_row_layout() == 'call-to-action' ): ?>
		<section class="call-to-action">
			<div class="container">
				<div class="text-center">
					<a href="#" class="btn-main hvr-shutter-out-horizontal">Interessou? Entre em contato!</a>
				</div>
				<!-- /.text-center -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.call-to-action -->


		<?php //VIDEO
	  	elseif( get_row_layout() == 'video' ): ?>
		<div class="youtube-video module main-padding">
			<div class="container">
				<?php $section_title = get_sub_field('title');
				if($section_title): ?>
					<h2 class="section-title text-center"><?php echo $section_title; ?></h2>
				<?php endif; ?>
				
				<?php $video_type = get_sub_field('video-type');
	      		if($video_type == 'youtube'): ?>
	      		<div class="video-content">
					<div class="videoWrapper">
					    <iframe src="http://www.youtube.com/embed/<?php the_sub_field('video-code'); ?>" allowfullscreen></iframe>
					</div>
					<!-- /.videoWrapper -->
				</div>
	      		<!-- /.video-content -->
				<?php else: ?>

				<div class="video-content">
					<div class="videoWrapper">
			          <iframe src="https://player.vimeo.com/video/<?php the_sub_field('video-code'); ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			    	</div>
			    	<!-- /.videoWrapper -->
		      	</div>
				<!-- /.video-content -->
	    	<?php endif; ?>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.my-buttons -->


		<?php //ACCORDIONS
	    elseif( get_row_layout() == 'accordions' ): ?>
	    <div class="accordion-module main-padding clearfix">
	    	<div class="container">
				<?php if( have_rows('accordions-repeater') ): ?>
	    		<div class="my-accordions clearfix">
	    			<?php while ( have_rows('accordions-repeater') ) : the_row(); ?>
					<h3><?php the_sub_field('title'); ?></h3>
					<div class="the-content clearfix">
						<?php the_sub_field('content'); ?>
					</div>
					<!-- /.the-content -->
					<?php endwhile; ?>
				</div>
				<!-- /.my-accordions -->
				<?php endif; ?>
	    	</div>
	    	<!-- /.container -->
	    </div>
	    <!-- /.module -->


	    <?php //GALLERY
	  	elseif( get_row_layout() == 'gallery' ): ?>
		<section class="gallery module main-padding">
			<div class="container">
				<?php $section_title = get_sub_field('title');
				if($section_title): ?>
					<h2 class="section-title text-center"><?php echo $section_title; ?></h2>
				<?php endif; ?>
				
				<?php $gallery_images = get_sub_field('gallery-repeater');
	     		 if( $gallery_images ): ?>
				<ul class="gallery-list clearfix row">
					<?php foreach( $gallery_images as $gallery_image ): ?>

					<li class="col-sm-3 col-xs-6">
						<a class="view-gallery" href="<?php echo $gallery_image['url']; ?>" title="<?php echo $gallery_image['title']; ?>">
							<figure>
								<img src="<?php echo $gallery_image['sizes']['gallery']; ?>" alt="<?php echo $gallery_image['alt']; ?>" width="<?php echo $gallery_image['sizes']['gallery-width']; ?>" height="<?php echo $gallery_image['sizes']['gallery-height']; ?>">
							</figure>
						</a>
					</li>

					<?php endforeach; ?>
				</ul>
				<!-- /.gallery-list -->
				<?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.gallery -->

	<?php endif; endwhile; ?>
<?php endif; ?>
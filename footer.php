<!--= FOOTER =-->
	<footer>
		<div class="the-footer">
			<div class="container">
				<div class="row">
					<div class="footer-block col-md-3">
						<div class="clearfix">
							<?php $logo_footer = get_field('logo-footer', 'option'); ?>
							<img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>" width="<?php echo $logo_footer['width']; ?>" height="<?php echo $logo_footer['height']; ?>" class="footer-logo img-responsive">
							<h3><?php the_field('about-title', 'option'); ?></h3>
						</div>
						<!-- /.clearfix -->

						<?php $about_text = get_field('about-text', 'option');
						if($about_text): ?>
						<p class="footer-desc"><?php echo $about_text; ?></p>
						<?php endif; ?>

						<?php $about_link = get_field('about-link', 'option');
						if($about_link): ?>
						<a href="<?php echo $about_link; ?>" class="footer-button hvr-shutter-out-horizontal">Saiba Mais</a>
						<?php endif; ?>

						<ul class="social-links clearfix">
		  					<?php $facebook = get_field('facebook', 'option');
		  					if($facebook): ?>
		  					<li><a href="<?php echo $facebook; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		  					<?php endif; ?>
							
							<?php $twitter = get_field('twitter', 'option');
		  					if($twitter): ?>
							<li><a href="<?php echo $twitter; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php endif; ?>

							<?php $youtube = get_field('youtube', 'option');
		  					if($youtube): ?>
							<li><a href="<?php echo $youtube; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							<?php endif; ?>
							
							<?php $google_plus = get_field('google-plus', 'option');
		  					if($google_plus): ?>
							<li><a href="<?php echo $google_plus; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<?php endif; ?>
							
							<?php $instagram = get_field('instagram', 'option');
		  					if($instagram): ?>
							<li><a href="<?php echo $instagram; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<?php endif; ?>
							
							<?php $linkedin = get_field('linkedin', 'option');
		  					if($linkedin): ?>
							<li><a href="<?php echo $linkedin; ?>" target="_blank" class="my-tooltip" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<?php endif; ?>
		  				</ul>
		  				<!-- /.social-links -->
					</div>
					<!-- /.footer-block -->

					<div class="footer-block col-md-3">
						<h3><?php the_field('footer-menu-title', 'option'); ?></h3>

						<?php if( have_rows('menu-footer', 'option') ): ?>
						<ul class="footer-list">
							<?php while ( have_rows('menu-footer', 'option') ) : the_row(); ?>
							<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
							<?php endwhile; ?>
						</ul>
						<!-- /.footer-list -->
						<?php endif; ?>
					</div>
					<!-- /.footer-block -->

					<div class="footer-block block-orange col-md-3">
						<h3><?php the_field('hour-title', 'option'); ?></h3>

						<?php if( have_rows('hours-repeater', 'option') ): ?>
						<ul class="footer-list">
							<?php while ( have_rows('hours-repeater', 'option') ) : the_row(); ?>
							<li><p><?php the_sub_field('day'); ?> <span class="hour"><?php the_sub_field('hour'); ?></span></p></li>
							<?php endwhile; ?>
						</ul>
						<!-- /.footer-list -->
						<?php endif; ?>
					</div>
					<!-- /.footer-block -->

					<div class="footer-block col-md-3">
						<h3><?php the_field('form-title', 'option'); ?></h3>

						<?php the_field('footer-form', 'option'); ?>
					</div>
					<!-- /.footer-block -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.the-footer -->

		<div class="footer-bottom">
			<div class="container">
				<p class="copyright">Copyright <?php echo date("Y"); ?> &copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>

				<?php
                  wp_nav_menu(
                      array(
                        'theme_location' => 'menu-principal',
                        'container' => 'ul',
                        'menu_class' => 'footer-menu hidden-xs'
                      )
                  );
                ?>
				<!-- /.footer-menu -->

				<a href="#top" class="go-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.footer-bottom -->
	</footer>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.placeholder.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.qbeforeafter.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/actions.js"></script>

	</body>
</html>
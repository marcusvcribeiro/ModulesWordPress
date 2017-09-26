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
				<h1>Página não encontrada</h1>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.page-title -->

		
		<!--= PAGE CONTENT =-->
		<div id="page-content" class="main-padding not-found">
			<div class="container">
				<p class="number">404</p>
				<h2 class="title">Página não encontrada!</h2>
				<p class="text">Desculpe nos, a página que você procura não foi encontrada. <br>Volte para nossa</p>

				<div class="center">
					<a href="<?php echo home_url(); ?>" class="button button-center">Página Inicial</a>
				</div>
				<!-- /.center -->

			</div>
			<!-- /.container -->
		</div>
		<!-- /#page-content -->
		
<?php get_footer(); ?>
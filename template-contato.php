<?php
/*
Template Name: Contato
*/
?>

<?php get_header('internal'); ?>

	<?php get_template_part('top-header'); ?>


	<?php $contact_map = get_field('map');
	if($contact_map): ?>
	<div class="contact-map">
		<?php echo $contact_map; ?>
	</div>
	<!-- /.contact-map -->
	<?php endif; ?>

	
	<!--= CONTACT =-->
	<section class="contact main-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php the_field('contact-form'); ?>
				</div>
				<!-- /.col-md-6 -->

				<div class="contact-infos col-md-6">
					<h2>Informações</h2>

					<ul class="infos-list">
						<?php $contact_hours = get_field('contact-hours');
						if($contact_hours): ?>
						<li>
							<h3>Nossos horários de serviço são:</h3>
							<p><?php echo $contact_hours; ?></p>
						</li>
						<?php endif; ?>

						<?php $contact_address = get_field('contact-address');
						if($contact_address): ?>
						<li>
							<h3>Endereço</h3>
							<p><?php echo $contact_address; ?></p>
						</li>
						<?php endif; ?>

						<?php $contact_phones = get_field('contact-phones');
						if($contact_phones): ?>
						<li>
							<h3>Telefones</h3>
							<p><?php echo $contact_phones; ?></p>
						</li>
						<?php endif; ?>
					</ul>
					<!-- /.infos-list -->
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.contact -->

	<?php get_template_part('modules'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

	<div class="col-sm-12">
		<div class="center-block"><?php if (!is_preview() && !is_user_logged_in() && function_exists('advman_ad')) advman_ad('horizontal_grande') ?></div>
	</div>

<div class="row">

	<div class="col-sm-9">

<?php 
	if (!is_paged()) {
		include('featured.php');
	} 
?>
		<div class="col-sm-12">
			<div style="width:468px;margin:0 auto"><?php if (!is_preview() && !is_user_logged_in() && function_exists('advman_ad')) advman_ad('468x60_principal_horizontal') ?></div>
		</div>

		<div class="col-sm-12 post-list">
			<?php if(have_posts()) : ?>
				<h3 class="section-label">Entradas recientes</h3>
				<?php include('post_list.php'); ?>
				<div class="navigation col-sm-12">
					<div class="col-sm-6 navigation-anteriores"><?php previous_posts_link('&laquo; Entradas anteriores'); ?></div>
					<div class="col-sm-6 navigation-siguientes"><?php next_posts_link('Entradas siguientes &raquo;'); ?></div>
				</div>
			<?php endif; ?>
		</div>

	</div>

	<?php get_sidebar(); ?>   
</div>

<?php get_footer(); ?>

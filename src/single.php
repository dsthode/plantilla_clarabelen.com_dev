<?php get_header(); ?>

<div class="row">
  <div class="col-sm-9">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="post hentry">
					<p class="postmetadata"><span class="published"><?php the_date(); ?></span> | <?php comments_number('Sin comentarios', 'Un comentario', '% comentarios'); ?> | por <span class="author vcard"><span class="fn"><?php the_author(); ?></span></span></p>
					<h3 class="entry-title"><a class="permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry entry-content">   
						<?php the_content(); ?>
					</div>
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="navigation">  
				<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			</div>
		<?php endif; ?>
	</div> 
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

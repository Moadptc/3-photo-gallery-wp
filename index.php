<?php get_header() ?>
	<?php if(have_posts()): ?>
	<div style="padding: 20px">
		<?php while(have_posts()): the_post(); ?>
			<?php get_template_part('content' , get_post_format()) ?>
		<?php endwhile; ?>
	</div>
	<?php else: ?>
		<?php echo wpauto('Sorry , There are no posts') ?>
	<?php endif; ?>
<?php get_footer() ?>

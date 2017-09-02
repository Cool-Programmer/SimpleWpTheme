<?php get_header(); ?>
<div class="main">
	<div class="container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
				<div class="meta">
					Created by <?php the_author(); ?>
					on <?php the_time('F j, Y g:i A'); ?>
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else: ?>
			<h3><?php echo wpautop("No posts were found...") ?></h3>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
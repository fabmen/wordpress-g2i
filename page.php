<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="catheader"><?php the_title(); ?></h1>
		<div class="pages">
				<?php the_content(); ?>
		</div>
        <hr style="clear: left;border:0;" />

		<?php endwhile; endif; ?>


<?php get_footer(); ?>
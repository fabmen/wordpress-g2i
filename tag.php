<?php get_header(); ?>
<h1 class="catheader">Archive(s) des mots-clefs</h1>

<div id="tagcloud"><?php wp_tag_cloud('smallest=8&largest=16'); ?></div>

<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
			

    <div class="posts">
    <h2><a href="<?php the_permalink() ?>" title="Cliquez pour lire <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta">
				Par <?php the_author() ?>
			</div>
	<?php theme_excerpt('55'); ?>
    </div>

	<?php endwhile; ?>
	
	<?php endif; ?>
<?php get_footer(); ?>
<?php get_header(); ?>
	<?php
    $mySearch =& new WP_Query("s=$s & showposts=-1");
    $num = $mySearch->post_count;
    echo '<h1 class="catheader">'.$num.' résultat(s) pour la recherche "'; the_search_query(); echo '"</h1>';
    ?>
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
    	<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
		</div>
            
    <?php else : ?>
    	<p>Désolé, mais ce que vous cherchez ne se trouve pas ici.</p>
    <?php endif; ?>

<?php get_footer(); ?>

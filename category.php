<?php get_header(); ?>

    <h1 class="catheader">
		<?php single_cat_title(); ?>
    </h1>
    <?php $catdesc = category_description(); if(stristr($catdesc,'<p>')) { echo '<div class="catdesc">'.$catdesc.'</div>'; } ?>
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="posts">
    <h2><a href="<?php the_permalink() ?>" title="Cliquez pour lire <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta">
				<?php if(get_option('uwc_dates_cats') == 'on') { echo '<div class="date">'; the_time("l j F Y"); echo '</div>'; } ?>
				<?php if(get_option('uwc_authors_cats') == 'on') { echo 'Par '; the_author(); } ?>
			</div>
                <?php resize(80,80); ?>

	<?php theme_excerpt('55'); ?>
    </div>
    
    <?php endwhile; ?>
    	<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
		</div>
            
    <?php else : ?>
    <h2>Non trouvé</h2>
    <div>
    	Désolé, mais ce que vous cherchez ne se trouve pas ici.
    </div>
    <?php endif; ?>

<?php get_footer(); ?>

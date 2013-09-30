<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="catheader">Archive(s) pour la catégorie &#8216;<?php single_cat_title(); ?>&#8217;</h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="catheader">Article(s) tagué(s) &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="catheader">Archive(s) du <?php the_time('j F Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="catheader">Archive(s) de <?php the_time('F Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="catheader">Archive(s) de <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="catheader">Archive(s) de l'auteur</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="catheader">Archive(s) du blog</h1>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="posts">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permament sur <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><?php the_time('l j F Y') ?></div>

				<div class="entry">
   	                <?php resize(80,80); ?>
					<?php theme_excerpt('55') ?>
				</div>

				<p class="meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> Classé dans <?php the_category(', ') ?> | <?php edit_post_link('Modifier', '', ' | '); ?>  <?php comments_popup_link('Aucun commentaire &#187;', '1 commentaire &#187;', '% commentaires &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Désolé, mais il n'y a pas encore d'article dans la catégorie %s.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Désolé, mais il n'y a aucun article à cette date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Désolé, mais il n'y a aucun article de %s.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Aucun article trouvé.</h2>");
		}

	endif;
?>

<?php get_footer(); ?>

<?php get_header(); ?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<div class="meta">
				<?php if(get_option('uwc_dates_posts') == 'on') { echo '<div class="date">'; the_time("l j F Y"); echo '</div>'; } ?>
				<?php if(get_option('uwc_authors_posts') == 'on') { echo 'Par '; the_author(); } ?>
			</div>
			<div class="entry">
				<?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
					if($subtitle) echo '<p class="sub">'.$subtitle.'</p>';
				 ?>
				 <?php the_content(); ?>
				<?php the_tags( '<p class="tags"><small>Tags: ', ', ', '</small></p>'); ?>
				<p class="postmetadata alt">
					<small>
						Cet article a été écrit
						le <?php the_time('l j F Y') ?> à <?php the_time() ?>
						et est classé dans <?php the_category(', ') ?>.
						Vous pouvez suivre toutes les réactions par le flux <?php post_comments_feed_link('RSS 2.0'); ?>.
					</small>
				</p>
			</div>
		</div>
	<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Désolé, aucun article ne correspond à votre demande.</p>
<?php endif; ?>

<?php get_footer(); ?>
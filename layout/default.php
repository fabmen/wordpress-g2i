<?php while (have_posts()) : the_post(); ?>
<div class="ind-post">
	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<div class="meta">
		<?php if(get_option('uwc_dates_index') == 'on') { echo '<div class="date">'; the_time("l j F Y"); echo '</div>'; } ?>
		<?php if(get_option('uwc_authors_index') == 'on') { echo 'Par '; the_author(); } ?>
	</div>
	
	<div class="storycontent">
		<?php if(get_option('uwc_excerpt_content') == 'content') { 
				resize(100,100);
				theme_content('(plus)');
			} else {
				resize(100,100);
				theme_excerpt(get_option('uwc_excerpt_one'));
			}	
		?>
	</div>
</div>
<?php endwhile; ?>

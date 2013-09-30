<?php while (have_posts()) : the_post(); ?>
<?php if($x == 1) { ?>
<div class="ind-post">
	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<div class="meta">
		<?php if(get_option('uwc_dates_index') == 'on') { echo '<div class="date">'; the_time("l j F Y"); echo '</div>'; } ?>
		<?php if(get_option('uwc_authors_index') == 'on') { echo 'Par '; the_author(); } ?>
	</div>
	
	<div class="storycontent">
		<?php if(get_option('uwc_excerpt_content') == 'content') { 
				resize(200,200);
				theme_content('(plus)');
			} else {
				resize(200,200);
				theme_excerpt(get_option('uwc_excerpt_one'));
			}	
		?>
	</div>
<?php $x++; ?>
<?php } elseif($x >= 2 && $x < 4) { ?>
<?php if($x == 2) { $i=1; ?></div><div id="twocol"><?php } ?>
	<div class="twopost twopost<?php echo $i; $i++; ?>">
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
				the_content(‘(plus)’);
			}	
			?>
		</div>
	 </div>
<?php $x++; ?>
<?php } else { ?>
<?php if($x == 4) { $i=1; ?></div><hr class="mainhr" /><div id="threecol"><div id="threecol2"><?php } ?>
	<div class="threepost threepost<?php if($i==7) { $i = 4; } echo $i; $i++; ?>">
		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<div class="meta">
			<?php if(get_option('uwc_dates_index') == 'on') { echo '<div class="date">'; the_time("l j F Y"); echo '</div>'; } ?>
            <?php if(get_option('uwc_authors_index') == 'on') { echo 'Par '; the_author(); } ?>
		</div>

		<div class="storycontent">
			<?php if(get_option('uwc_excerpt_content') == 'content') { 
					resize(50,50);
					theme_content('(plus)');
				} else {
					resize(50,50);
					theme_excerpt(get_option('uwc_excerpt_three'));
				}	
			?>
		</div>
	 </div>
<?php $x++; } ?>
<?php endwhile; ?>
<?php if($x>4) { echo "</div>"; } ?>
</div>
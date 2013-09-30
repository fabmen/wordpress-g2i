	<?php 
    if ($_SERVER['REQUEST_URI'] != '/') { echo '</div>'; }; 
?>
    <?php
	if(get_option('uwc_sidebar_location') == "oneright") {   	
		get_sidebar(1);
	}
	if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "twoseparate") { 
		include(TEMPLATEPATH.'/sidebar2.php'); 
	}
	if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "tworight") {   	
		get_sidebar(1);
		include(TEMPLATEPATH.'/sidebar2.php');
	}
	?>
    
    
</div>

<div id="piedpage">
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
<?php  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
<?php  if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
</div> 


<!-- begin footer -->
<div id="footer">
Réalisation / adaptation :
<a rel="nofollow" target="_blank" title="&agrave; hauteur d&acute;x" href="http://www.ahauteurdx.com/">&agrave; hauteur d&acute;x</a> | Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>. tous droits résevés | <a rel="nofollow" target="_blank" title="connexion" href="<?php bloginfo('url') ?>/wp-admin/">Connexion</a> | 
    <span class="red">Magazine Basic</span> theme designed by <a href="http://tinkerpriestmedia.com"><span class="red">c.bavota</span></a>.<br />
</div>
<?php wp_footer(); ?>
<!-- Magazine Basic theme designed by c.bavota - http://tinkerpriestmedia.com -->
<?php if(get_option('uwc_google_analytics')) { echo stripslashes(get_option('uwc_google_analytics')); } ?>
</body>
</html>

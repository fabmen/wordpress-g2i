<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>
    
    <?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <meta name="description" content="<?php metaDesc(); ?>" />
    <?php csv_tags(); ?>
    <?php endwhile; endif; elseif(is_home()) : ?>
    <meta name="description" content="<?php if(get_option('uwc_site_description')) { echo get_option('uwc_site_description'); } else { bloginfo('description'); } ?>" />
    <meta name="keywords" content="<?php if(get_option('uwc_keywords')) { echo get_option('uwc_keywords'); } else { echo 'wordpress,c.bavota,magazine basic,custom theme,tinkerpriestmedia.com'; } ?>" />
    <?php endif; ?>
    
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); if(is_home()) { echo ' | '; bloginfo('description'); } ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Fil RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script type="text/javascript">
 var addthis_config = {"data_track_clickback":true};
 </script> <script type="text/javascript"
 src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=[YOUR PROFILE ID]"></script>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/iestyles.css" />
<![endif]-->
<!--[if lte IE 6]>
<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/images/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>
<!-- begin header -->
<div id="header">
	<?php if (get_option('uwc_user_login') == "yes") { ?>
	<div id="login">
    	<?php
			global $user_identity, $user_level;
			if (is_user_logged_in()) { ?>
            	<ul>
                <li><span style="float:left;">Connecté en tant que: <strong><?php echo $user_identity ?></strong></span></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-admin">Tableau de bord</a></li>
                <?php if ( $user_level >= 1 ) { ?>
                	<li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">Ecrire</a></li>
				<?php } ?>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Profil</a></li>
				<li class="dot"><a href="<?php echo wp_logout_url() ?>&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>" title="<?php _e('Déconnexion') ?>"><?php _e('Déconnexion'); ?></a></li>
                </ul>
            <?php 
			} else {
				echo '<ul>';
				echo '<li><a href="'; echo bloginfo("url"); echo '/wp-login.php">Connexion</a></li>';
				if (get_option('users_can_register')) { ?>
					<li class="dot"><a href="<?php echo site_url('wp-login.php?action=register', 'login') ?>"><?php _e('S&acute;inscrire') ?></a> </li>
                
            <?php 
				}
				echo "</ul>";
			} ?> 
    </div>
    <?php } ?>
    <?php if(get_option('uwc_header_ad') == 'on') { ?>
		<?php if(get_option('uwc_headerad_img')) { ?>
            <div id="headerad">
                <a href="<?php echo get_option('uwc_headerad_link'); ?>"><img src="<?php echo get_option('uwc_headerad_img'); ?>" alt="" /></a>
            </div>
        <?php } else { ?>
            <div id="headerad">
                <a href="http://tinkerpriestmedia.com"><img src="<?php bloginfo('template_url'); ?>/images/topbanner.png" alt="Designed by c.bavota" /></a>
            </div>
        <?php } ?>
    <?php } ?>
	<?php if (get_option('uwc_logo_header') == "yes" && get_option('uwc_logo')) { ?>
    <div id="title">
    	<a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('uwc_logo'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
    </div>    	
    <?php } else { ?>
    <div id="title">
    	<a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <?php } ?>
   	<div id="description">
    	<?php // bloginfo('description'); ?>
    </div>
    
    <!--<div class="flag">
    
    <p>
    
    <a href="#"><img src="http://www.dev-ahauteurdx.com/g2i/wp-content/uploads/2012/04/FR.jpg" alt="Français" title="Français" style="margin-right:20px;" /></a>
    <a href="#"><img src="http://www.dev-ahauteurdx.com/g2i/wp-content/uploads/2012/04/EN.jpg" alt="English" title="English" /></a>
    
    </p>
    
    </div>-->
    
     <div class="search">

				<form id="searchform" action="http://g2i.upmf-grenoble.fr/" method="get">
					<div>
					<input id="s" class="search_input" type="text" onblur="if (this.value == '') {this.value = 'Recherchez et validez';}" onfocus="if (this.value == 'Recherchez et validez') {this.value = '';}" name="s" value="Recherchez et validez">
			<input id="searchsubmit" type="hidden" value="Recherche">
					</div>
				</form><!-- .search-form -->

			</div><!-- .search -->
            

<div id="top">


   
    <div id="navigation">
        <ul>
        
         <!-- To show "current" on the home page -->
        <li<?php 
                if (is_home()) 
                {
                echo " id='current'";
                }?>>
                <a href="<?php bloginfo('url') ?>">Accueil</a>
       
                       <?php wp_list_pages('title_li=&exclude=772'); ?>

       
        
        
        </ul>
        
    </div>
   
   

     <div id="social">
    
  	<p> 

	<a href="http://www.facebook.com/pages/Grenoble-Institut-de-lInnovation/354499398011254" target="_blank"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2012/04/facebook3.png" alt="Rejoignez-nous sur Facebook" title="Rejoignez-nous sur Facebook" /></a> 
<!--
<a href="#" target="_blank"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2012/04/twitter3.png" alt="Rejoignez-nous sur Twitter" title="Suivez-nous sur Twitter" /></a>
 
<a href="<?php bloginfo('url') ?>/feed/rss" target="_blank"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2012/04/rss3.png" alt="S'abonner au flux RSS" title="S'abonner au flux RSS" /></a>

<a class="addthis_button" href="http://www.addthis.com/bookmark.php"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2012/04/add_this.png" width="32" height="32" border="0" alt="Partager" /></a>
-->
	</p>

    
    
</div>
</div>

<!-- end header -->





<div id="mainwrapper">
<?php
	if(get_option('uwc_site_sidebars') == "1" && get_option('uwc_sidebar_location') == "oneleft") {   	
		get_sidebar(1);
	}
	if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "twoseparate") {   	
		get_sidebar(1);
	}	
	if(get_option('uwc_site_sidebars') == "2" && get_option('uwc_sidebar_location') == "twoleft") {   	
		get_sidebar(1);
		include(TEMPLATEPATH.'/sidebar2.php');
	}
	if(get_option('uwc_site_sidebars') == "" && get_option('uwc_sidebar_location') == "") {   	
		get_sidebar(1);
	}
	?>
    
	<div id="leftcontent">

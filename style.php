<?php
	if (get_option('uwc_logo_header') == "yes" && function_exists('getimagesize')) {
		list($w, $h) = @getimagesize(get_option('uwc_logo'));
		$height = $h/2;
	} else {
		$height = 18;
	}
	$site = get_option('uwc_site_width');
	$sidebar = get_option('uwc_sidebar_width1');
	$sidewidget = get_option('uwc_sidebar_width1') - 20;
	$secondsidebar = get_option('uwc_sidebar_width2');
	$sidewidget2 = get_option('uwc_sidebar_width2') - 20;
	if(get_option('uwc_site_sidebars') == 1) {
		$content =  get_option('uwc_site_width') - get_option('uwc_sidebar_width1') - 47;
	} else {
		$content =  get_option('uwc_site_width') - get_option('uwc_sidebar_width1') - get_option('uwc_sidebar_width2') - 64;		
	}
?>
<style type='text/css'>
	body { width: <?php echo $site; ?>px; }
	#sidebar { width: <?php echo $sidebar; ?>px; }
	#sidebar .side-widget { width: <?php echo $sidewidget; ?>px; }
	#secondsidebar { width: <?php echo $secondsidebar; ?>px; }
	#secondsidebar .side-widget { width: <?php echo $sidewidget2; ?>px; }
	#leftcontent, #twocol, #threecol, #threecol2, .commentlist { width: <?php echo $content; ?>px; }
	#leftcontent img { max-width: <?php echo $content; ?>px; }
<?php
 if (get_option('uwc_logo_location') == "middle") {
	echo "	#title { text-align: center }\n";
	echo "	#description { clear: both; text-align: center; }\n";		
	echo "	#headerad { display:none; }\n";
} elseif(get_option('uwc_logo_location') == "right") {
	echo "	#title { float: right; }\n";
	echo "	#description { clear: right; float: right; text-align: right }\n";	
	echo "	#headerad { float: left; margin: ". $height . "px 0 0 5px;}\n";
} else {
	echo "	#title { float: left; }\n";
	echo "	#description { clear: left; float: left; }\n";
	echo "	#headerad { float: right; margin: ". $height . "px 5px 0 0; }\n";
}
?>
</style>

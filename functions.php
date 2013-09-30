<?php // Enregistrement des sidebar et des widgets
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Footer 1',
		'before_widget' => '<div id="piedpage" class="textepiedpage">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'before_widget' => '<div id="piedpage" class="textepiedpage">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'before_widget' => '<div id="piedpage" class="textepiedpage2">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

?>

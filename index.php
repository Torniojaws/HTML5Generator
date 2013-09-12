<?php

	// Includes
	include('classes/class-page.php');
	include('functions/func-getsafetitle.php');

	// Settings
	$title = getSafeTitle();
	$template = 'templates/basic/';
	$css = $template . 'basic.css';

	// Generate the page
	$website = new Page($title, $css);
	$website->display($template);
	
?>
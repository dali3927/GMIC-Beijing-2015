###Google Font

#####/wp-content/themes/x/framework/functions/global/enqueue/styles.php

replace  
wp_enqueue_style( 'x-font-standard', $get_standard_font_family, NULL, NULL, 'all' );  
wp_enqueue_style( 'x-font-standard', 'http://7u2l46.com5.z0.glb.qiniucdn.com/2015/lato.css', NULL, NULL, 'all' );

new  
wp_enqueue_style( 'anglee', '/anglee.css', NULL, NULL, 'all' );

#####/wp-content/themes/x/framework/views/global/_header-widget-areas.php
wipe

###wp-options
x_design_bg_image_pattern  
http://7u2l46.com5.z0.glb.qiniucdn.com/2015/bg.png

x_logo  
http://7u2l46.com5.z0.glb.qiniucdn.com/2015/logo.png

###Customise

#####Typography
Site Links		3cb034  
Hover Colors	3258a8

#####Button
Colors			3cb034  
Hover Colors	3258a8

#####Header
Navbar Search	Off  
Topbar			On  
Breadcrumbs		Off

#####Social
Enable Open Graph	Off

###Revolution Slider
Slider Layout: Full Screen

#####Loop and Progress
Show Progressbar: Hide  
Loop Single Slide: Off

#####Appearance
Shadow Type: No Shadow

#####Navigation
Stop On Hover: Off

###WordPress Installation
wp-config.php

	if (is_admin()) {
		add_filter('filesystem_method', create_function('$a', 'return "direct";'));
		define('FS_CHMOD_DIR', 0751);
	}
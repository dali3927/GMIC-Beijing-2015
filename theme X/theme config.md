###Google Font
#####/framework/css/admin/global.css
@import url(//fonts.googleapis.com/css?family=Lato:300&text=X);

#####/wp-content/themes/x/framework/functions/global/enqueue/styles.php

$get_custom_font_family   = add_query_arg( $custom_font_args,   '//fonts.googleapis.com/css' );  
$get_standard_font_family = add_query_arg( $standard_font_args, '//fonts.googleapis.com/css' );  
fonts.useso.com

wp_enqueue_style( 'x-font-standard', $get_standard_font_family, NULL, NULL, 'all' );  
http://7u2l46.com2.z0.glb.qiniucdn.com/2015/lato.css

#####/wp-content/themes/x/framework/views/global/_header-widget-areas.php
wipe

###wp-options
x_design_bg_image_pattern  
http://7u2l46.com2.z0.glb.qiniucdn.com/2015/bg.png

x_logo  
http://7u2l46.com2.z0.glb.qiniucdn.com/2015/logo.png

###Customise

#####Typography
Site Links		3258a8

#####Button
Colors			3258a8  
Hover Colors	1e73be

#####Header
Navbar Search	Off  
Breadcrumbs		Off  
Topbar			On

#####Footer
Footer Menu		Off
Footer Social	Off

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
Layout and Design > Content Layout > Fullwidth

###Google Font
\framework\css\admin\global.css  
Line 18: @import url(//fonts.googleapis.com/css?family=Lato:300&text=X);

\framework\functions\global\enqueue\styles.php (2 hits)  
Line 78:     $get_custom_font_family   = add_query_arg( $custom_font_args,   '//fonts.googleapis.com/css' );  
Line 79:     $get_standard_font_family = add_query_arg( $standard_font_args, '//fonts.googleapis.com/css' );

###wp-options
x_design_bg_image_pattern  
http://7q5bmq.com5.z0.glb.clouddn.com/gmic/bg-integrity-1.png

x_logo  
http://7q5bmq.com5.z0.glb.clouddn.com/gmic/logo.png

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

	if (is_admin()) {
		add_filter('filesystem_method', create_function('$a', 'return "direct";'));
		define('FS_CHMOD_DIR', 0751);
	}
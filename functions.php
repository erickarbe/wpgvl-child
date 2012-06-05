<?php

// Use Google Fonts

function theme_styles(){ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Merriweather:400,700', array(), '1', 'all' );

  // enqueing:
  wp_enqueue_style( 'googlefont' );
}
add_action('wp_print_styles', 'theme_styles');

/*
 *
 * HIDES THE ADMIN BAR ON THE FRONT END OF THE SITE
 *
 */
add_filter( 'show_admin_bar', '__return_false' );

?>
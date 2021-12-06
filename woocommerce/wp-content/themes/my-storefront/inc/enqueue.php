<?php


/* counter script */
function my_storefront_counter_scripts()
{

	wp_register_script(
	   'my-storefront-counter-script',
	   get_stylesheet_directory_uri() . '/js/countdown-timer.js',
	   array('jquery'),
	   1.0,
	   true
   );

   wp_enqueue_script( 'my-storefront-counter-script' );
   
   $my_storefront_options  = ecommerce_plus_get_theme_options();
   
   $date = (isset($my_storefront_options['countdown_date']) ? $my_storefront_options['countdown_date'] : '' );
   $month = (isset($my_storefront_options['countdown_month']) ? $my_storefront_options['countdown_month'] : '' );
   $year = (isset($my_storefront_options['countdown_year']) ? $my_storefront_options['countdown_year'] : '' );
   
	
	$show_days = (isset($my_storefront_options['countdown_enable_days']) ? $my_storefront_options['countdown_enable_days'] : false );
	$show_hours = (isset($my_storefront_options['countdown_enable_hours']) ? $my_storefront_options['countdown_enable_hours'] : false );
	
	
   $script_params = array(          
	   'dateString' => absint($year) . '-' . absint($month) . '-' . absint($date),
	   'show_days' => $show_days,
	   'show_hours' => $show_hours
   );


   wp_localize_script( 'my-storefront-counter-script', 'megashopScriptParams', $script_params );

}
add_action( 'wp_enqueue_scripts', 'my_storefront_counter_scripts' );




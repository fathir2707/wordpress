<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


add_filter('ecommerce_plus_default_theme_options', 'my_storefront_default_settings');

function my_storefront_default_settings($ecommerce_plus_default_options){
		
		
	$ecommerce_plus_default_options['primary_color'] = '#1170d4';
	$ecommerce_plus_default_options['accent_color'] = '#c10e0e';
	$ecommerce_plus_default_options['link_color'] = '#002c3d';
	
	$ecommerce_plus_default_options['site_header_layout'] = 'storefront';
	
	$ecommerce_plus_default_options['header_title_color'] = '#202020';
	
	$ecommerce_plus_default_options['store_menu_color'] = '#fff';
	$ecommerce_plus_default_options['store_menubar_color'] = '#114fe0';
	
	$ecommerce_plus_default_options['menubar_border_height'] = 0;

	$ecommerce_plus_default_options['heading_font'] = 'Kanit';	
	$ecommerce_plus_default_options['body_font'] = 'Google Sans';	
	
	
	$ecommerce_plus_default_options['before_shop'] = 0;
	$ecommerce_plus_default_options['after_shop'] = 0;
	
	$ecommerce_plus_default_options['footer_bg_color'] = '#252626';
	$ecommerce_plus_default_options['footer_text_color'] = '#fff';
	
	$ecommerce_plus_default_options['topbar_login_label'] = esc_html__('Contact', 'my-storefront');
	
	$ecommerce_plus_default_options['breadcrumb_image'] = get_stylesheet_directory_uri().'/images/breadcrumb.jpg';
	$ecommerce_plus_default_options['breadcrumb_show'] = true;
	
	$ecommerce_plus_default_options['topbar_login_register_enable'] = false;

	
	return $ecommerce_plus_default_options;
}



// BEGIN ENQUEUE SCRIPTS

if ( !function_exists( 'my_storefront_locale_css' ) ):
    function my_storefront_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
		
		
    }
endif;
add_filter( 'locale_stylesheet_uri', 'my_storefront_locale_css' );

if ( !function_exists( 'my_storefront_parent_css' ) ):
    function my_storefront_parent_css() {
        wp_enqueue_style( 'my_storefront_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'my_storefront_parent_css', 10 );



require_once (get_stylesheet_directory() . '/inc/enqueue.php');
require_once (get_stylesheet_directory() . '/inc/new-customizer-options.php');
// END ENQUEUE SCRIPTS



/*
 * Banner image
 */
add_action('my_storefront_banner', 'my_storefront_banner');

function my_storefront_banner(){

$my_storefront_options  = ecommerce_plus_get_theme_options(); 


	if($my_storefront_options['banner_image'] !='') { 
	
	?>
		<section id="top-banner">
			<div class="text-center">
				<?php 
					echo '<a href="'.esc_url($my_storefront_options['banner_link']).'" ><img src="'.esc_url($my_storefront_options['banner_image']).'" /></a>';	
				?>
			</div>
		</section>
	<?php	
	}

}
 


//add child theme widget area

function my_storefront_widgets_init(){

	/* header sidebar */
	$my_storefront_options = ecommerce_plus_get_theme_options();
	if (!isset($my_storefront_options['header_widgets'])) $my_storefront_options['header_widgets'] = "col-sm-12";

	register_sidebar(
		array(
			'name'          => __( 'Home Page Header Widgets', 'my-storefront' ),
			'id'            => 'header-widgets',
			'description'   => __( 'Add widgets to appear in Header.', 'my-storefront' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s '.$my_storefront_options['header_widgets'].' text-center">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'my_storefront_widgets_init' );


function  my_storefront_setup (){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'my_storefront_setup' );




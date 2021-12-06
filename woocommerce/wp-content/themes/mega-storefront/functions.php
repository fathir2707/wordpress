<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

require_once (get_stylesheet_directory() . '/inc/options.php');
require_once (get_stylesheet_directory() . '/inc/core.php');

// BEGIN ENQUEUE 

if ( !function_exists( 'mega_storefront_locale_css' ) ):
    function mega_storefront_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'mega_storefront_locale_css' );

if ( !function_exists( 'mega_storefront_parent_css' ) ):
    function mega_storefront_parent_css() {
        wp_enqueue_style( 'mega_storefront_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'mega_storefront_parent_css', 10 );

// END ENQUEUE

add_action( 'customize_register', 'mega_storefront_customizer_settings' );

function mega_storefront_customizer_settings( $wp_customize ) {

	global $ecommerce_plus_options;	
	
	$wp_customize->add_section( 'ecommerce_plus_woo_options', array(
		'title'             => esc_html__( 'Shop Page','mega-storefront' ),
		'description'       => esc_html__( 'WooCommerce plugin related options. You can create pages and add before and after shop page. Also set shop page as home page.', 'mega-storefront' ),
		'panel'             => 'ecommerce_plus_theme_options_panel',
		'priority'   		=> 6,
	) );

		
	//shop pages 1
	$wp_customize->add_setting('ecommerce_plus_options[before_shop]' , array(
		'default'    		=> $ecommerce_plus_options['before_shop'],
		'sanitize_callback' => 'absint',
		'type'				=>'option',

	));

	$wp_customize->add_control('ecommerce_plus_options[before_shop]' , array(
		'label' 	=> __('Page Before Shop Page', 'mega-storefront' ),
		'section' 	=> 'ecommerce_plus_woo_options',
		'type'		=> 'dropdown-pages',
	) );	

	
	//shop pages 2
	$wp_customize->add_setting('ecommerce_plus_options[after_shop]' , array(
		'default'    		=> $ecommerce_plus_options['after_shop'],
		'sanitize_callback' => 'absint',
		'type'				=>'option',

	));

	$wp_customize->add_control('ecommerce_plus_options[after_shop]' , array(
		'label' => __('Page After Shop Page', 'mega-storefront' ),
		'section' => 'ecommerce_plus_woo_options',
		'type'=> 'dropdown-pages',
	) );
	

	// banner image
	$wp_customize->add_setting( 'ecommerce_plus_options[banner_image]' , 
		array(
			'default' 		=> '',
			'capability'     => 'edit_theme_options',
			'type'				=>'option',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'ecommerce_plus_options[banner_image]' ,
		array(
			'label'         => __( 'Banner Image', 'mega-storefront' ),
			'description'	=> __('Upload banner image', 'mega-storefront'),
			'settings'  	=> 'ecommerce_plus_options[banner_image]',
			'section'       => 'ecommerce_plus_header',
		))
	);
	
	//
	$wp_customize->add_setting('ecommerce_plus_options[banner_link]' , array(
		'default'    => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type'				=>'option',
	));
	
	$wp_customize->add_control('ecommerce_plus_options[banner_link]' , array(
		'label'   => __('Banner Image Link', 'mega-storefront' ),
		'section' => 'ecommerce_plus_header',
		'type'    => 'url',
	) );
	
	
	//countdown section
	$wp_customize->add_section( 'ecommerce_plus_countdown_section', array(
		'title'             => esc_html__( 'Countdown Timer','mega-storefront' ),
		'description'       => esc_html__( 'Add a countdown timer with messege. Edit year, month, date and messege and save to display.', 'mega-storefront' ),
		'panel'             => 'ecommerce_plus_theme_options_panel',
		'priority'   		=> 5,
	) );
	
	
	//enable countdown
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_enable]', array(
		'default'   		=> false,
		'sanitize_callback' => 'ecommerce_plus_sanitize_checkbox',
		'type'      		=> 'option'
	));
	
	
	$wp_customize->add_control('ecommerce_plus_options[countdown_enable]',
		array(
			'section'   => 'ecommerce_plus_countdown_section',
			'label'     => esc_html__( 'Enable Countdown Timer', 'mega-storefront' ),
			'type'      => 'checkbox'
	));
	
	$wp_customize->selective_refresh->add_partial( 'ecommerce_plus_options[countdown_enable]', array(
		'selector' => '#countdown-timer-text',
	) );
	
	//enable days
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_enable_days]', array(
		'default'   		=> true,
		'sanitize_callback' => 'ecommerce_plus_sanitize_checkbox',
		'type'      		=> 'option'
	));
	
	
	$wp_customize->add_control('ecommerce_plus_options[countdown_enable_days]',
		array(
			'section'   => 'ecommerce_plus_countdown_section',
			'label'     => esc_html__( 'Enable Days', 'mega-storefront' ),
			'type'      => 'checkbox'
	));
	
	//enable hours
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_enable_hours]', array(
		'default'   		=> true,
		'sanitize_callback' => 'ecommerce_plus_sanitize_checkbox',
		'type'      		=> 'option'
	));
	
	
	$wp_customize->add_control('ecommerce_plus_options[countdown_enable_hours]',
		array(
			'section'   => 'ecommerce_plus_countdown_section',
			'label'     => esc_html__( 'Enable Hours', 'mega-storefront' ),
			'type'      => 'checkbox'
	));	
	
	$wp_customize->selective_refresh->add_partial( 'ecommerce_plus_options[countdown_enable]', array(
		'selector' => '#countdown-timer-text',
	) );
		
	// year
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_year]', array(
		'default'          	=> '2025',
		'sanitize_callback' => 'ecommerce_plus_sanitize_select',
		'type'      		=> 'option',
	) );
	
	$wp_customize->add_control( 'ecommerce_plus_options[countdown_year]', array(
		'label'             => esc_html__( 'Year', 'mega-storefront' ),
		'section'           => 'ecommerce_plus_countdown_section',
		'type'				=> 'select',
		'choices'			=> 	array(
								"2021"  => 2021,
								"2022" 	=> 2022,
								"2023" 	=> 2023,
								"2024" 	=> 2024,
								"2025" 	=> 2025,
								"2026" 	=> 2026,
								"2027" 	=> 2027,
								"2028" 	=> 2028,
								"2029" 	=> 2029,
								"2030" 	=> 2030,		
							),
	));
		
		
	// month
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_month]', array(
		'default'          	=> '12',
		'sanitize_callback' => 'ecommerce_plus_sanitize_select',
		'type'      		=> 'option',
	) );
	
	$wp_customize->add_control( 'ecommerce_plus_options[countdown_month]', array(
		'label'             => esc_html__( 'Month', 'mega-storefront' ),
		'section'           => 'ecommerce_plus_countdown_section',
		'type'				=> 'select',
		'choices'			=> 	array(
								"1"     => 1,
								"2" 	=> 2,
								"3" 	=> 3,
								"4" 	=> 4,
								"5" 	=> 5,
								"6" 	=> 6,
								"7" 	=> 7,
								"8" 	=> 8,
								"9" 	=> 9,
								"10" 	=> 10,
								"11" 	=> 11,
								"12" 	=> 12,		
							),
	));
	
	// date
	$wp_customize->add_setting( 'ecommerce_plus_options[countdown_date]', array(
		'default'          	=> '12',
		'sanitize_callback' => 'ecommerce_plus_sanitize_select',
		'type'      		=> 'option',
	) );
	
	$wp_customize->add_control( 'ecommerce_plus_options[countdown_date]', array(
		'label'             => esc_html__( 'Date', 'mega-storefront' ),
		'section'           => 'ecommerce_plus_countdown_section',
		'type'				=> 'select',
		'choices'			=> 	array(
								"1"     => 1,
								"2" 	=> 2,
								"3" 	=> 3,
								"4" 	=> 4,
								"5" 	=> 5,
								"6" 	=> 6,
								"7" 	=> 7,
								"8" 	=> 8,
								"9" 	=> 9,
								"10" 	=> 10,
								"11" 	=> 11,
								"12" 	=> 12,
								"13"     => 13,
								"14" 	=> 14,
								"15" 	=> 15,
								"16" 	=> 16,
								"17" 	=> 17,
								"18" 	=> 18,
								"19" 	=> 19,
								"20" 	=> 20,
								"21" 	=> 21,
								"22" 	=> 22,
								"23" 	=> 23,
								"24" 	=> 24,													
								"25" 	=> 25,
								"26" 	=> 26,
								"27" 	=> 27,
								"28" 	=> 28,
								"29" 	=> 29,
								"30" 	=> 30,
								"31" 	=> 31,								
							),
	));



	//text
	$wp_customize->add_setting('ecommerce_plus_options[countdown_text]' , array(
		'default'    		=> esc_html__('Discount upto 25%, Limited time offer', 'mega-storefront' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'				=>'option',
	));
	
	$wp_customize->add_control('ecommerce_plus_options[countdown_text]' , array(
		'label'   => __('Countdown Message', 'mega-storefront' ),
		'section' => 'ecommerce_plus_countdown_section',
		'type'    => 'text',
	) );


}// end customizer


/*
 * Banner image
 */
add_action('mega_storefront_banner', 'mega_storefront_banner');

function mega_storefront_banner(){

$mega_storefront_options  = ecommerce_plus_get_theme_options(); 


	if($mega_storefront_options['banner_image'] !='') { 
	
	?>
		<section id="top-banner">
			<div class="text-center">
				<?php 
					echo '<a href="'.esc_url($mega_storefront_options['banner_link']).'" ><img src="'.esc_url($mega_storefront_options['banner_image']).'" /></a>';	
				?>
			</div>
		</section>
	<?php	
	}

}




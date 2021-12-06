<?php

add_action( 'customize_register', 'my_storefront_customizer_settings' );

function my_storefront_customizer_settings( $wp_customize ) {

	global $ecommerce_plus_options;	
	
	$wp_customize->add_section( 'ecommerce_plus_woo_options', array(
		'title'             => esc_html__( 'Shop Page','my-storefront' ),
		'description'       => esc_html__( 'WooCommerce plugin related options. You can create pages and add before and after shop page. Also set shop page as home page.', 'my-storefront' ),
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
		'label' 	=> __('Page Before Shop Page', 'my-storefront' ),
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
		'label' => __('Page After Shop Page', 'my-storefront' ),
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
			'label'         => __( 'Banner Image', 'my-storefront' ),
			'description'	=> __('Upload banner image', 'my-storefront'),
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
		'label'   => __('Banner Image Link', 'my-storefront' ),
		'section' => 'ecommerce_plus_header',
		'type'    => 'url',
	) );
	
	
	//countdown section
	$wp_customize->add_section( 'ecommerce_plus_countdown_section', array(
		'title'             => esc_html__( 'Countdown Timer','my-storefront' ),
		'description'       => esc_html__( 'Add a countdown timer with messege. Edit year, month, date and messege and save to display.', 'my-storefront' ),
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
			'label'     => esc_html__( 'Enable Countdown Timer', 'my-storefront' ),
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
			'label'     => esc_html__( 'Enable Days', 'my-storefront' ),
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
			'label'     => esc_html__( 'Enable Hours', 'my-storefront' ),
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
		'label'             => esc_html__( 'Year', 'my-storefront' ),
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
		'label'             => esc_html__( 'Month', 'my-storefront' ),
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
		'label'             => esc_html__( 'Date', 'my-storefront' ),
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
		'default'    		=> esc_html__('Discount upto 15%, Limited time offer', 'my-storefront' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'				=>'option',
	));
	
	$wp_customize->add_control('ecommerce_plus_options[countdown_text]' , array(
		'label'   => __('Countdown Message', 'my-storefront' ),
		'section' => 'ecommerce_plus_countdown_section',
		'type'    => 'text',
	) );
	
	
	//widgets section	
	$wp_customize->add_section( 'header_widgets' , array(
		'title'      => __( 'Home Header Widgets', 'my-storefront' ),
		'priority'   => 1,
		'panel' => 'ecommerce_plus_theme_options_panel',
	) );	
	
	$wp_customize->add_setting('ecommerce_plus_options[top_widgets]' , array(
		'default'    => 'col-sm-12',
		'sanitize_callback' => 'ecommerce_plus_sanitize_select',
		'type'=>'option',

	));

	$wp_customize->add_control('ecommerce_plus_options[top_widgets]' , array(
		'label' => __('Select Number of Widgets', 'my-storefront' ),
		'section' => 'header_widgets',
		'type'=>'select',
		'choices'=>array(
			'col-sm-12'=> __('1 Widgets', 'my-storefront' ),
			'col-sm-6' => __('2 Widgets', 'my-storefront' ),
			'col-sm-4' => __('3 Widgets', 'my-storefront' ),
			'col-sm-3' => __('4 Widgets', 'my-storefront' ),
			'col-sm-2' => __('6 Widgets', 'my-storefront' ),
		),
	) );
    
    // add header shortcode section
	$wp_customize->add_section( 'ecommerce_plus_shortcode_options', array(
		'title'             => esc_html__( 'Header Shortcode','my-storefront' ),
		'description'       => esc_html__( 'Add shortcode to display in header', 'my-storefront' ),
		'panel'             => 'ecommerce_plus_theme_options_panel',
		'priority'   		=> 6,
	) );
    
 	$wp_customize->add_setting('ecommerce_plus_options[header_shortcode]' , array(
		'default'    		=> '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'				=>'option',
	));
	
	$wp_customize->add_control('ecommerce_plus_options[header_shortcode]' , array(
		'label'   => __('Header Shortcode', 'my-storefront' ),
		'section' => 'ecommerce_plus_shortcode_options',
		'type'    => 'text',
	) );   



}// end customizer

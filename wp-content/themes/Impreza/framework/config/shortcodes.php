<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme's shortcodes
 *
 * @filter us_config_shortcodes
 */
global $us_template_directory;
return array(

	/**
	 * Overloading existing and registering new shortcodes
	 */
	'vc_row' => array(
		'atts' => array(
			'columns_type' => 'medium',
			'height' => 'medium',
			'valign' => '',
			'width' => '',
			'color_scheme' => '',
			'us_bg_color' => '',
			'us_text_color' => '',
			'us_bg_image' => '',
			'us_bg_size' => 'cover',
			'us_bg_repeat' => 'repeat',
			'us_bg_pos' => 'center center',
			'us_bg_parallax' => '',
			'us_bg_parallax_width' => '130',
			'us_bg_parallax_reverse' => FALSE,
			'us_bg_video' => FALSE,
			'video_mp4' => '',
			'video_ogg' => '',
			'video_webm' => '',
			'us_bg_overlay_color' => '',
			'el_id' => '',
			'el_class' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_row.php',
	),
	'vc_row_inner' => array(
		'atts' => array(
			'columns_type' => 'medium',
			'el_id' => '',
			'el_class' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_row_inner.php',
	),
	'vc_column' => array(
		'atts' => array(
			'width' => '1/1',
			'text_color' => '',
			'animate' => '',
			'animate_delay' => 0,
			'el_class' => '',
			'offset' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_column.php',
	),
	'vc_column_inner' => array(
		'atts' => array(
			'width' => '1/1',
			'text_color' => '',
			'animate' => '',
			'animate_delay' => 0,
			'el_class' => '',
			'offset' => '',
			'css' => '',
		),
		'alias_of' => 'vc_column',
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_column_inner.php',
	),
	'vc_column_text' => array(
		'atts' => array(
			'el_class' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_column_text.php',
	),
	'us_single_image' => array(
		'atts' => array(
			'image' => '',
			'size' => 'large',
			'align' => '',
			'lightbox' => FALSE,
			'link' => '',
			'animate' => '',
			'animate_delay' => 0,
			'el_class' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_single_image.php',
	),
	'us_gallery' => array(
		'atts' => array(
			'ids' => '',
			'columns' => 6,
			'layout' => 'default',
			'orderby' => '',
			'indents' => FALSE,
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_gallery.php',
	),
	'gallery' => array(
		'alias_of' => 'us_gallery',
	),
	'us_image_slider' => array(
		'atts' => array(
			'ids' => '',
			'arrows' => 'always',
			'nav' => 'none',
			'transition' => 'slide',
			'autoplay' => FALSE,
			'autoplay_period' => 3000,
			'fullscreen' => FALSE,
			'orderby' => '',
			'img_size' => 'large',
			'img_fit' => 'scaledown',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_image_slider.php',
	),
	'us_separator' => array(
		'atts' => array(
			'type' => 'default',
			'size' => 'medium',
			'thick' => '1',
			'style' => 'solid',
			'color' => 'border',
			'bdcolor' => '',
			'icon' => '',
			'text' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_separator.php',
	),
	'us_btn' => array(
		'atts' => array(
			'text' => __( 'Click Me', 'us' ),
			'link' => '',
			'color' => 'primary',
			'bg_color' => '',
			'text_color' => '',
			'style' => 'raised',
			'icon' => '',
			'iconpos' => 'left',
			'size' => 'medium',
			'align' => 'left',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_btn.php',
	),
	'vc_tta_tabs' => array(
		'atts' => array(
			'layout' => '',
			'el_class' => '',
			'css' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_tta_tabs.php',
	),
	'vc_tabs' => array(
		'alias_of' => 'vc_tta_tabs',
	),
	'vc_tta_accordion' => array(
		'atts' => array(
			'toggle' => FALSE,
			'c_align' => 'left',
			'c_icon' => 'chevron',
			'c_position' => 'right',
			'title_tag' => 'h5',
			'el_class' => '',
			'css' => '',
		),
		'alias_of' => 'vc_tta_tabs',
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_tta_accordion.php',
	),
	'vc_accordion' => array(
		'alias_of' => 'vc_tta_tabs',
	),
	'vc_tta_tour' => array(
		'atts' => array(
			'c_align' => 'left',
			'tab_position' => 'left',
			'controls_size' => 'auto',
			'el_class' => '',
			'css' => '',
		),
		'alias_of' => 'vc_tta_tabs',
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_tta_tour.php',
	),
	'vc_tta_section' => array(
		'atts' => array(
			'title' => '',
			'icon' => '',
			'i_position' => 'left',
			'active' => FALSE,
			'indents' => '',
			'bg_color' => '',
			'text_color' => '',
			'c_position' => 'right',
			'title_tag' => 'h5',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_tta_section.php',
	),
	'vc_tab' => array(
		'alias_of' => 'vc_tta_section',
	),
	'vc_accordion_tab' => array(
		'alias_of' => 'vc_tta_section',
	),
	'us_iconbox' => array(
		'atts' => array(
			'icon' => 'star',
			'style' => 'default',
			'color' => 'primary',
			'icon_color' => FALSE,
			'bg_color' => FALSE,
			'iconpos' => 'top',
			'size' => 'medium',
			'title' => '',
			'link' => '',
			'img' => '',
			'el_class' => '',
		),
		'content' => '',
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_iconbox.php',
	),
	'us_testimonial' => array(
		'atts' => array(
			'style' => '1',
			'author' => 'Jon Show',
			'company' => 'Lord Commander',
			'img' => '',
			'el_class' => '',
		),
		'content' => __( 'Text goes here', 'us' ),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_testimonial.php',
	),
	'us_person' => array(
		'atts' => array(
			'name' => 'Jon Snow',
			'role' => 'Lord Commander',
			'image' => '',
			'layout' => 'card',
			'link' => '',
			'email' => '',
			'facebook' => '',
			'twitter' => '',
			'google_plus' => '',
			'linkedin' => '',
			'skype' => '',
			'custom_icon' => '',
			'custom_link' => '',
			'el_class' => '',
		),
		'content' => '',
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_person.php',
	),
	'us_portfolio' => array(
		'atts' => array(
			'columns' => 3,
			'pagination' => 'none',
			'items' => '',
			'style' => 'style_1',
			'align' => 'center',
			'ratio' => '1x1',
			'meta' => '',
			'filter' => 'none',
			'with_indents' => FALSE,
			'orderby' => 'date',
			'categories' => NULL,
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_portfolio.php',
	),
	'us_blog' => array(
		'atts' => array(
			'layout' => 'large',
			'columns' => 1,
			'content_type' => 'excerpt',
			'pagination' => 'none',
			'categories' => NULL,
			'show_date' => TRUE,
			'show_author' => TRUE,
			'show_categories' => TRUE,
			'show_tags' => TRUE,
			'show_comments' => TRUE,
			'show_read_more' => TRUE,
			'items' => NULL,
			'orderby' => 'date',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_blog.php',
	),
	'us_logos' => array(
		'atts' => array(
			'columns' => 5,
			'with_indents' => FALSE,
			'style' => '1',
			'arrows' => FALSE,
			'auto_scroll' => FALSE,
			'interval' => 3,
			'orderby' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_logos.php',
	),
	'us_cta' => array(
		'atts' => array(
			'title' => __( 'This is ActionBox', 'us' ),
			'color' => 'primary',
			'bg_color' => '',
			'text_color' => '',
			'controls' => 'right',
			'btn_label' => __( 'Click Me', 'us' ),
			'btn_link' => '',
			'btn_color' => 'primary',
			'btn_bg_color' => '',
			'btn_text_color' => '',
			'btn_style' => 'raised',
			'btn_size' => 'medium',
			'btn_icon' => '',
			'btn_iconpos' => 'left',
			'second_button' => FALSE,
			'btn2_label' => __( 'Or Me', 'us' ),
			'btn2_link' => '',
			'btn2_color' => 'secondary',
			'btn2_bg_color' => '',
			'btn2_text_color' => '',
			'btn2_style' => 'raised',
			'btn2_size' => 'medium',
			'btn2_icon' => '',
			'btn2_iconpos' => 'left',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_cta.php',
	),
	'vc_video' => array(
		'atts' => array(
			'link' => 'http://vimeo.com/23237102',
			'ratio' => '16x9',
			'max_width' => '',
			'align' => 'left',
			'css' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_video.php',
	),
	'us_message' => array(
		'atts' => array(
			'color' => 'info',
			'bg_color' => '',
			'text_color' => '',
			'icon' => '',
			'closing' => FALSE,
			'el_class' => '',
		),
		'content' => __( 'I am message box. Click edit button to change this text.', 'us' ),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_message.php',
	),
	'us_counter' => array(
		'atts' => array(
			'initial' => '0',
			'target' => '99',
			'color' => 'text',
			'custom_color' => '',
			'size' => 'medium',
			'title' => __( 'Projects completed', 'us' ),
			'prefix' => '',
			'suffix' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_counter.php',
	),
	'us_cform' => array(
		'atts' => array(
			'receiver_email' => get_option( 'admin_email' ),
			'name_field' => 'required',
			'email_field' => 'required',
			'phone_field' => 'required',
			'message_field' => 'required',
			'captcha_field' => 'hidden',
			'button_color' => 'primary',
			'button_bg_color' => '',
			'button_text_color' => '',
			'button_style' => 'raised',
			'button_size' => 'medium',
			'button_align' => 'left',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_cform.php',
	),
	'us_sharing' => array(
		'atts' => array(
			'type' => 'simple',
			'align' => 'left',
			'color' => 'default',
			'counters' => 'show',
			'facebook' => TRUE,
			'twitter' => TRUE,
			'linkedin' => TRUE,
			'gplus' => TRUE,
			'pinterest' => TRUE,
			'url' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_sharing.php',
	),
	'us_social_links' => array(
		'atts' => array(
			'size' => 'small',
			'align' => 'left',
			'style' => 'colored',
			'email' => '',
			'facebook' => '',
			'twitter' => '',
			'google' => '',
			'linkedin' => '',
			'youtube' => '',
			'vimeo' => '',
			'flickr' => '',
			'instagram' => '',
			'behance' => '',
			'xing' => '',
			'pinterest' => '',
			'skype' => '',
			'tumblr' => '',
			'dribbble' => '',
			'vk' => '',
			'soundcloud' => '',
			'yelp' => '',
			'twitch' => '',
			'deviantart' => '',
			'foursquare' => '',
			'github' => '',
			'odnoklassniki' => '',
			's500px' => '',
			'houzz' => '',
			'rss' => '',
			'custom_link' => '',
			'custom_title' => '',
			'custom_icon' => '',
			'custom_color' => '#1abc9c',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_social_links.php',
	),
	'us_gmaps' => array(
		'atts' => array(
			'marker_address' => '1600 Amphitheatre Parkway, Mountain View, CA 94043, United States',
			'marker_text' => base64_encode( '<h6>Hey, we are here!</h6><p>We will be glad to see you in our office.</p>' ),
			'show_infowindow' => FALSE,
			'markers' => '',
			'custom_marker_img' => '',
			'custom_marker_size' => 20,
			'height' => 400,
			'type' => 'roadmap',
			'zoom' => 14,
			'latitude' => '',
			'longitude' => '',
			'hide_controls' => FALSE,
			'disable_zoom' => FALSE,
			'disable_dragging' => FALSE,
			'map_bg_color' => '',
			'map_style_json' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_gmaps.php',
	),
	'us_pricing' => array(
		'atts' => array(
			'style' => '1',
			'items' => '',
			'el_class' => '',
		),
		'items_atts' => array(
			'title' => 'New Item',
			'type' => 'default',
			'price' => '$99',
			'substring' => 'per month',
			'features' => '',
			'btn_text' => 'Sign up',
			'btn_color' => 'primary',
			'btn_bg_color' => '',
			'btn_text_color' => '',
			'btn_style' => 'raised',
			'btn_size' => 'medium',
			'btn_icon' => '',
			'btn_iconpos' => 'left',
			'btn_link' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_pricing.php',
	),
	'us_contacts' => array(
		'atts' => array(
			'address' => '',
			'phone' => '',
			'fax' => '',
			'email' => '',
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_contacts.php',
	),
	'us_progbar' => array(
		'atts' => array(
			'title' => 'This is Progress Bar',
			'count' => '50',
			'style' => '1',
			'color' => 'primary',
			'bar_color' => '',
			'size' => 'medium',
			'hide_count' => FALSE,
			'el_class' => '',
		),
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/us_progbar.php',
	),
	/**
	 * Changing order of existing shortcodes without overloading them
	 */
	'vc_raw_html' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_raw_html.php',
	),
	'vc_raw_js' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_raw_js.php',
	),
	'vc_widget_sidebar' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_widget_sidebar.php',
	),
	'vc_flickr' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_flickr.php',
	),
	'vc_empty_space' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_empty_space.php',
	),
	'vc_custom_heading' => array(
		'overload' => FALSE,
		'custom_vc_map' => $us_template_directory . '/framework/plugins-support/js_composer/map/vc_custom_heading.php',
	),
	/**
	 * Backward compatibility
	 */
	'vc_separator' => array(
		'alias_of' => 'us_separator',
	),
	'vc_text_separator' => array(
		'alias_of' => 'us_separator',
	),
	'vc_message' => array(
		'alias_of' => 'us_message',
	),
	'vc_single_image' => array(
		'alias_of' => 'us_single_image',
	),
	'vc_gallery' => array(
		'alias_of' => 'us_gallery',
	),
	'vc_btn' => array(
		'alias_of' => 'us_btn',
	),
	'vc_gmaps' => array(
		'alias_of' => 'us_gmaps',
	),
	/**
	 * Shortcodes that are not supported by the theme, and should be temporarily disabled
	 */
	'vc_icon' => array(
		'supported' => FALSE,
	),
	'vc_facebook' => array(
		'supported' => FALSE,
	),
	'vc_tweetmeme' => array(
		'supported' => FALSE,
	),
	'vc_googleplus' => array(
		'supported' => FALSE,
	),
	'vc_pinterest' => array(
		'supported' => FALSE,
	),
	'vc_tta_pageable' => array(
		'supported' => FALSE,
	),
	'vc_toggle' => array(
		'supported' => FALSE,
	),
	'vc_tour' => array(
		'supported' => FALSE,
	),
	'vc_posts_slider' => array(
		'supported' => FALSE,
	),
	'vc_progress_bar' => array(
		'supported' => FALSE,
	),
	'vc_pie' => array(
		'supported' => FALSE,
	),
	'vc_basic_grid' => array(
		'supported' => FALSE,
	),
	'vc_media_grid' => array(
		'supported' => FALSE,
	),
	'vc_images_carousel' => array(
		'supported' => FALSE,
	),
	'vc_masonry_grid' => array(
		'supported' => FALSE,
	),
	'vc_masonry_media_grid' => array(
		'supported' => FALSE,
	),

);

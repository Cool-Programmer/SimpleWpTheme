<?php 
	function simple_theme_setup()
	{
		// Add featured image for admin panel
		add_theme_support('post-thumbnails');

		// Menus
		register_nav_menus([
			'primary' => "Primary"
		]);
	}

	add_action('after_setup_theme', 'simple_theme_setup');





	// Excerpt length
	function set_excerpt_length()
	{
		return 60;
	}
	add_filter('excerpt_length', 'set_excerpt_length');




	// Widgetizing
	function init_widgets($id)
	{
		register_sidebar([
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div class="sidewidget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		]);
	}
	add_action('widgets_init', 'init_widgets');
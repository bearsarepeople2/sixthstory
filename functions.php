<?php
  include('customizer.php');

  function wp_tempalte_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Montserrat:500,800|Material+Icons');
    wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'wp_tempalte_scripts' );

  add_theme_support( 'post-thumbnails' );

  // Client post type
  function clients_post_type() {

  	$args = array(
      'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __( 'Client' )
      ),
      'has_archive' => true,
  		'supports'              => array('title', 'thumbnail'),
  		'public'                => true,

  	);
  	register_post_type( 'client', $args );

  }
  add_action( 'init', 'clients_post_type' );

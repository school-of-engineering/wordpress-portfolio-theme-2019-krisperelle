<?php

function project_post_type() {
    $args = array(
        'public'              => true,
        'menu_icon'           => 'dashicons-portfolio', // string (defaults to use the post icon)
        'hierarchical'        => false,
        'has_archive'=>'projects',
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
        ),
      );
    register_post_type(
        'project',
        $args
    );
}
add_action( 'init', 'project_post_type' );

function create_project_type() {
  $labels = array(
    'name'                       => _x( 'Project types', 'Taxonomy General Name', 'portfolio-theme' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
  );
  register_taxonomy( 'project-type', array('project'), $args );
}
add_action( 'init', 'create_project_type' );


function create_project_skill() {
  $labels = array(
    'name'                       => _x( 'Project skills', 'Taxonomy General Name', 'portfolio-theme' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
  );
  register_taxonomy( 'project-skill', array('project'), $args );
}
add_action( 'init', 'create_project_skill' );




add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );




add_image_size( 'grid_thumbnail', 300, 300, true );
add_image_size( 'single_large', 660, 400, true );
add_image_size( 'profile_pic', 500, 500, true );
add_image_size( 'post_image', 200, 200, true);



function register_my_menus() {
  register_nav_menus(
    array(
      'header-nav'=> ( 'Page Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

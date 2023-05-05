<?php


 /*Custom Post type start*/
function cw_post_type_portfolios() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Portfolios', 'plural'),
'singular_name' => _x('Portfolio', 'singular'),
'menu_name' => _x('Portfolios', 'admin menu'),
'name_admin_bar' => _x('Portfolios', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Portfolio'),
'new_item' => __('New Portfolio'),
'edit_item' => __('Edit Portfolio'),
'view_item' => __('View Portfolio'),
'all_items' => __('All Portfolios'),
'search_items' => __('Search Portfolios'),
'not_found' => __('No Portfolio found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolios'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-portfolio',
);
register_post_type('all_portfolios', $args);
}
add_action('init', 'cw_post_type_portfolios');



/**
 * Add custom taxonomies
 */

add_action( 'init', 'create_service_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_service_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Services', 'taxonomy general name' ),
    'singular_name' => _x( 'Service', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Services' ),
    'all_items' => __( 'All Services' ),
    'parent_item' => __( 'Parent Services' ),
    'parent_item_colon' => __( 'Parent Services:' ),
    'edit_item' => __( 'Edit Service' ), 
    'update_item' => __( 'Update Service' ),
    'add_new_item' => __( 'Add New Service' ),
    'new_item_name' => __( 'New Service Name' ),
    'menu_name' => __( 'Services' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('service-type',array('all_portfolios'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'service-type' ),
  ));
  
}


/**
 * Add custom taxonomies
 */

add_action( 'init', 'create_dm_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_dm_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Digital Marketing', 'taxonomy general name' ),
    'singular_name' => _x( 'Digital Marketing', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Digital Marketing' ),
    'all_items' => __( 'All Digital Marketing' ),
    'parent_item' => __( 'Parent Digital Marketing' ),
    'parent_item_colon' => __( 'Parent Digital Marketing:' ),
    'edit_item' => __( 'Edit Digital Marketing' ), 
    'update_item' => __( 'Update Digital Marketing' ),
    'add_new_item' => __( 'Add New Digital Marketing' ),
    'new_item_name' => __( 'New Digital Marketing Name' ),
    'menu_name' => __( 'Digital Marketing' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('digital-marketing',array('all_portfolios'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'digital-marketing' ),
  ));
  
}

/**
 * Add custom taxonomies
 */

add_action( 'init', 'create_technology_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_technology_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Technology', 'taxonomy general name' ),
    'singular_name' => _x( 'Technology', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Technology' ),
    'all_items' => __( 'All Technology' ),
    'parent_item' => __( 'Parent Technology' ),
    'parent_item_colon' => __( 'Parent Technology:' ),
    'edit_item' => __( 'Edit Technology' ), 
    'update_item' => __( 'Update Technology' ),
    'add_new_item' => __( 'Add New Technology' ),
    'new_item_name' => __( 'New Technology Name' ),
    'menu_name' => __( 'Technology' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('technology',array('all_portfolios'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'technology' ),
  ));
  
}



//  /*Custom Post type start*/
// function cw_post_type_services() {
// $supports = array(
// 'title', // post title
// 'editor', // post content
// 'author', // post author
// 'thumbnail', // featured images
// 'excerpt', // post excerpt
// 'custom-fields', // custom fields
// 'comments', // post comments
// 'revisions', // post revisions
// 'post-formats', // post formats
// );
// $labels = array(
// 'name' => _x('Services', 'plural'),
// 'singular_name' => _x('Service', 'singular'),
// 'menu_name' => _x('Services', 'admin menu'),
// 'name_admin_bar' => _x('Services', 'admin bar'),
// 'add_new' => _x('Add New', 'add new'),
// 'add_new_item' => __('Add New Service'),
// 'new_item' => __('New Service'),
// 'edit_item' => __('Edit Service'),
// 'view_item' => __('View Services'),
// 'all_items' => __('All Services'),
// 'search_items' => __('Search Services'),
// 'not_found' => __('No Services found.'),
// );
// $args = array(
// 'supports' => $supports,
// 'labels' => $labels,
// 'public' => true,
// 'query_var' => true,
// 'rewrite' => array('slug' => 'services'),
// 'has_archive' => true,
// 'hierarchical' => false,
// 'menu_icon' => 'dashicons-hammer',
// );
// register_post_type('all_services', $args);
// }
// add_action('init', 'cw_post_type_services');


 /*Custom Post type start*/
function cw_post_type_brands() {
$supports = array(
'title', // post title
'', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Brands', 'plural'),
'singular_name' => _x('Brand', 'singular'),
'menu_name' => _x('Brands', 'admin menu'),
'name_admin_bar' => _x('Brands', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Brand'),
'new_item' => __('New Brand'),
'edit_item' => __('Edit Brand'),
'view_item' => __('View Brand'),
'all_items' => __('All Brands'),
'search_items' => __('Search Brands'),
'not_found' => __('No Brand found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'brands'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-megaphone',
);
register_post_type('all_brands', $args);
}
add_action('init', 'cw_post_type_brands');


 /*Custom Post type start*/
function cw_post_type_team() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Team', 'plural'),
'singular_name' => _x('Team', 'singular'),
'menu_name' => _x('Team', 'admin menu'),
'name_admin_bar' => _x('Team', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Member'),
'new_item' => __('New Member'),
'edit_item' => __('Edit Member'),
'view_item' => __('View Member'),
'all_items' => __('All Member'),
'search_items' => __('Search Member'),
'not_found' => __('No Member found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'team-members'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-groups',
);
register_post_type('team-members', $args);
}
add_action('init', 'cw_post_type_team');

/**
 * Add custom taxonomies
 */

add_action( 'init', 'create_designation_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_designation_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Designation', 'taxonomy general name' ),
    'singular_name' => _x( 'Designation', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Designation' ),
    'all_items' => __( 'All Designations' ),
    'parent_item' => __( 'Parent Designation' ),
    'parent_item_colon' => __( 'Parent Designation:' ),
    'edit_item' => __( 'Edit Designation' ), 
    'update_item' => __( 'Update Designation' ),
    'add_new_item' => __( 'Add New Designation' ),
    'new_item_name' => __( 'New Designation Name' ),
    'menu_name' => __( 'Designation' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('designation',array('team-members'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'designation' ),
  ));
  
}


 /*Custom Post type start*/
function cw_post_type_testimonials() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Testimonials', 'plural'),
'singular_name' => _x('Testimonials', 'singular'),
'menu_name' => _x('Testimonials', 'admin menu'),
'name_admin_bar' => _x('Testimonials', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Testimonial'),
'new_item' => __('New Testimonial'),
'edit_item' => __('Edit Testimonial'),
'view_item' => __('View Testimonial'),
'all_items' => __('All Testimonial'),
'search_items' => __('Search Testimonial'),
'not_found' => __('No Testimonial found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'testimonials'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-format-status',
);
register_post_type('testimonials', $args);
}
add_action('init', 'cw_post_type_testimonials');

/**
 * Add custom taxonomies
 */

add_action( 'init', 'create_type_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_type_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Type' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Type' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('type',array('testimonials'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
  
}
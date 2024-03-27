<?php 

function load_css(){
    wp_register_style('style', get_template_directory_uri(). '/style.css' , array(), false , 'all');
    wp_enqueue_style('style');
    wp_register_style('main', get_template_directory_uri(). '/main.css' , array(), false , 'all');
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');

// Theme options
add_theme_support( 'menus' );
add_image_size( 'custom-size', 700, 300, true );
add_theme_support('post-thumbnails');





// Menus 
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

// Custom function to modify excerpt
function custom_excerpt($excerpt) {
    $excerpt = strip_tags($excerpt); // Remove HTML tags
    $excerpt = rtrim($excerpt, '[...]'); // Remove the default excerpt ending
    $excerpt_length = 260; // Adjust the desired excerpt length
    $excerpt = substr($excerpt, 0, $excerpt_length); // Limit excerpt to specified length
    $excerpt = rtrim($excerpt, ".,!?:; "); // Remove any trailing punctuation marks
    $excerpt .= '...'; // Add ellipsis at the end
    return $excerpt;
}
add_filter('get_the_excerpt', 'custom_excerpt');

function theme_name_register_sidebar() {
    register_sidebar( array(
        'name'          =>  'Page Sidebar' ,
        'id'            => 'page-sidebar',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          =>  'Blog Sidebar' ,
        'id'            => 'blog-sidebar',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'theme_name_register_sidebar' );




// Register Custom Post Type
function custom_theme_register_books_post_type() {
    $labels = array(
        'name'                  => _x( 'Books', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Books', 'text_domain' ),
        'archives'              => __( 'Book Archives', 'text_domain' ),
        'attributes'            => __( 'Book Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Book:', 'text_domain' ),
        'all_items'             => __( 'All Books', 'text_domain' ),
        'add_new_item'          => __( 'Add New Book', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Book', 'text_domain' ),
        'edit_item'             => __( 'Edit Book', 'text_domain' ),
        'update_item'           => __( 'Update Book', 'text_domain' ),
        'view_item'             => __( 'View Book', 'text_domain' ),
        'view_items'            => __( 'View Books', 'text_domain' ),
        'search_items'          => __( 'Search Book', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into book', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this book', 'text_domain' ),
        'items_list'            => __( 'Books list', 'text_domain' ),
        'items_list_navigation' => __( 'Books list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter books list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Book', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'menu_icon'             => 'dashicons-book', 
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'custom_theme_register_books_post_type', 0 );




?>

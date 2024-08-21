<?php

// Register Developers Taxonomy
function custom_register_developers_taxonomy() {
    // Define singular and plural names
    $singular = 'Developer';
    $plural = 'Developers';
    
    // Define the post type associated with this taxonomy
    $post_type = 'project';

    $labels = array(
        'name' => _x($plural, 'taxonomy general name'),
        'singular_name' => _x($singular, 'taxonomy singular name'),
        'search_items' => __('Search ' . $plural),
        'all_items' => __('All ' . $plural),
        'parent_item' => __('Parent ' . $singular),
        'parent_item_colon' => __('Parent ' . $singular . ':'),
        'edit_item' => __('Edit ' . $singular),
        'update_item' => __('Update ' . $singular),
        'add_new_item' => __('Add New ' . $singular),
        'new_item_name' => __('New ' . $singular . ' Name'),
        'menu_name' => __($plural),
        'view_item' => __('View ' . $singular),
        'popular_items' => __('Popular ' . $plural),
        'separate_items_with_commas' => __('Separate ' . strtolower($plural) . ' with commas'),
        'add_or_remove_items' => __('Add or remove ' . strtolower($plural)),
        'choose_from_most_used' => __('Choose from the most used ' . strtolower($plural)),
        'not_found' => __('No ' . strtolower($plural) . ' found'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => strtolower($singular)),
        'show_in_rest' => true, // Enable for Gutenberg editor support
    );

    register_taxonomy(strtolower($singular), array($post_type), $args);
}
add_action('init', 'custom_register_developers_taxonomy');



?>

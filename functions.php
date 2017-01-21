<?php
add_action('init','prowp_register_my_post_types');

function prowp_register_my_post_types() {
    register_post_type( 'products',
        array(
            'labels' => array(
                'name' => 'Products',
                'singular_name'=>'Product',
                'add_new'=>'Add New Product',
                'add_new_item'=>'Add New Product',
                'edit_item'=>'Edit Product',
                'new_item'=>'New Product',
                'all_items'=>'All Product',
                'view_item'=>'View Product',
                'search_items'=>'Search Products',
                'not_found'=>'No Products Found',
                'not found in trash'=>'No Products Found in Trash',
                'menu_name'=>'Products'
            ),

            'description'=>'Titus Products',
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'category' ),
            'menu_icon' => '',
            'has_archive' => true,
            'rewrite'=> array('slug'=>'products')
        )
    );

}
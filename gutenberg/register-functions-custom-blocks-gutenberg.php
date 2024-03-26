<?php
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a testimonial block
        acf_register_block(array(
            'name'              => 'block-carousel',
            'title'             => __('Block Carousel'),
            'description'       => __('Images Carousel Custom Block'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'carousel', 'quote' ),
        ));
    }
}

function my_acf_block_render_callback( $block ) {
    
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/custom-blocks-gutenberg/{$slug}.php") ) ) {
        include( get_theme_file_path("/custom-blocks-gutenberg/{$slug}.php") );
        
        // Enqueue CSS
        wp_enqueue_style( 'block-carousel-style', get_template_directory_uri() . "/custom-blocks-gutenberg/block-carousel/{$slug}.css" );
    }
}
?>
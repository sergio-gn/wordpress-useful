/**
 * Hide admin bar
 */

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Show admin bar
 */
function show_admin_bar_on_pages( $show ) {
    if ( is_page() ) {
        return true;
    }
    return $show;
}
add_filter( 'show_admin_bar', 'show_admin_bar_on_pages' );

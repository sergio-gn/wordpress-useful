/**
 * Hide admin bar
 */

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Show admin bar
 */
function show_admin_bar_for_logged_in_users() {
    if (is_user_logged_in()) {
        add_filter('show_admin_bar', '__return_true');
    } else {
        add_filter('show_admin_bar', '__return_false');
    }
}
add_action('after_setup_theme', 'show_admin_bar_for_logged_in_users');

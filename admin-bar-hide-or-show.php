/**
 * Hide admin bar
 */

// Hide admin bar on the frontend for logged-in users
function hide_admin_bar() {
    if (!is_user_logged_in()) {
        return false;
    }
    return true;
}
add_filter('show_admin_bar', 'hide_admin_bar');

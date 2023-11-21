/******************* add this on functions.php *****************************/
function force_lowercase_urls() {
    if (!is_admin()) {
        $url = $_SERVER['REQUEST_URI'];
        if (preg_match('/[A-Z]/', $url)) {
            wp_redirect(strtolower($url), 301);
            exit();
        }
    }
}
add_action('init', 'force_lowercase_urls');

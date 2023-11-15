/************ PASTE THIS ON FUNCTIONS.PHP ***************/

function webp_upload_mimes($existing_mimes) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

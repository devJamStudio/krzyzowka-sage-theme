<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});



add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

// Hook into the 'wp_calculate_image_sizes' filter to adjust the sizes attribute



// Hook into the 'after_setup_theme' action to register the custom image sizes
add_action('after_setup_theme', function () {
    // Register new image sizes
    add_image_size('custom-3k', 3072, 3072, false); // 3K resolution
    add_image_size('custom-1920', 1920, 1920, false); // 1920 resolution
    add_image_size('custom-2560', 2560, 2560, false); // 2560 resolution
});

// Make the new image sizes available in the WordPress admin

add_filter('image_size_names_choose', function ($sizes) {
    return array_merge($sizes, array(
        'custom-3k' => __('3K Resolution'),
        'custom-1920' => __('1920 Resolution'),
        'custom-2560' => __('2560 Resolution'),
    ));
});

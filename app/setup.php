<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;
use Ajax\PortfolioAjaxHandler;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    // Enqueue the script
    bundle('app')->enqueue()->localize('ajax_url', ['ajax_url' , admin_url('admin-ajax.php')]);

    // Localize the script with the Ajax URL
    wp_localize_script('app', 'ajaxurl', [
        'ajaxurl' => admin_url('admin-ajax.php')
    ]);
}, 100);
/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

add_action('wp_head', function () {
    wp_enqueue_script('typekit', '//use.typekit.net/alj3sly.js', array(), '1.0.0');
});
function prefix_typekit_inline()
{
    if (wp_script_is('typekit', 'enqueued')) {
        echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
    }
}
wp_localize_script('sage/js', 'resources_ajax', array( 'ajax_url' => admin_url('admin-ajax.php') ));
add_action('wp_enqueue_scripts', function () {
});
/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');


    $defaults = array(
            'height'               => 100,
            'flex-height'          => true,
            'flex-width'           => true,
    );
     add_theme_support('custom-logo', $defaults);

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),

    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');
    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);
add_action('init', function () {
    $labels = array(
        'name'               => _x('Portfolios', 'post type general name', 'sage'),
        'singular_name'      => _x('Portfolio', 'post type singular name', 'sage'),
        'menu_name'          => _x('Portfolios', 'admin menu', 'sage'),
        'name_admin_bar'     => _x('Portfolio', 'add new on admin bar', 'sage'),
        'add_new'            => _x('Add New', 'portfolio', 'sage'),
        'add_new_item'       => __('Add New Portfolio', 'sage'),
        'new_item'           => __('New Portfolio', 'sage'),
        'edit_item'          => __('Edit Portfolio', 'sage'),
        'view_item'          => __('View Portfolio', 'sage'),
        'all_items'          => __('All Portfolios', 'sage'),
        'search_items'       => __('Search Portfolios', 'sage'),
        'parent_item_colon'  => __('Parent Portfolios:', 'sage'),
        'not_found'          => __('No portfolios found.', 'sage'),
        'not_found_in_trash' => __('No portfolios found in Trash.', 'sage'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'sage'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'taxonomies'  => array( 'category' ),
        'has_archive'        => true,
        'show_in_rest' => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ,'category'),
    );

    register_post_type('portfolio', $args);
});
/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

add_action('wp_ajax_filter_posts', function () {
    $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'portfolio';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'filter_posts') {
        // Retrieve the category_id from the POST data
        $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
    }
    $args = [
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ],
        ],
    ];

    $query = new \WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();
            $item = [
                'ID'         => get_the_ID(),
                'title'      => get_the_title(),
                'year'       => get_the_date('Y'),
                'thumbnail'  => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'categories' => wp_get_post_categories(get_the_ID()),
                'is_new'     => get_field('is_new', get_the_ID()),
            ];
            echo view('partials.portfolio-item', ['item' => $item])->render();
        }
        wp_reset_postdata();
        $html = ob_get_clean();
        wp_send_json_success(['html' => $html]);
    } else {
        wp_send_json_error(['message' => 'No posts found']);
    }
});



add_action('wp_ajax_nopriv_filter_posts', function () {
    // Your existing code to fetch posts...
    $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'portfolio';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'filter_posts') {
        // Retrieve the category_id from the POST data
        $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;
    }
    $args = [
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ],
        ],
    ];
    $query = new \WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();
            $item = [
                'ID'         => get_the_ID(),
                'title'      => get_the_title(),
                'year'       => get_the_date('Y'),
                'thumbnail'  => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'categories' => wp_get_post_categories(get_the_ID()),
                'is_new'     => get_field('is_new', get_the_ID()),
            ];
            echo view('partials.portfolio-item', ['item' => $item])->render();
        }
        wp_reset_postdata();
        $html = ob_get_clean();
        wp_send_json_success(['html' => $html]);
    } else {
        wp_send_json_error(['message' =>  $category_id ]);
    }
});


add_action('wp_enqueue_scripts', function () {
    // Enqueue the script
    wp_enqueue_script('ajax', get_template_directory_uri() . '/resources/scripts/ajax.js', [], null, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/resources/scripts/slider.js', [], null, true);

    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    // Enqueue Swiper JS from CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    // Localize the script with the admin URL
    wp_localize_script('ajax', 'admin_url', [
        'admin_url' => admin_url('admin-ajax.php')
    ]);
});

function filterPostsCallBack()
{
        // This function is responsible for processing AJAX requests
        $category_id = isset($_GET['formData']) ? intval($_GET['formData']) : 0;
        $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'portfolio';

        $args = [
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $category_id,
                ],
            ],
        ];

        $query = new \WP_Query($args);

        if ($query->have_posts()) {
            ob_start();
            while ($query->have_posts()) {
                $query->the_post();
                $item = [
                    'ID'         => get_the_ID(),
                    'title'      => get_the_title(),
                    'year'       => get_the_date('Y'),
                    'thumbnail'  => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                    'categories' => wp_get_post_categories(get_the_ID()),
                    'is_new'     => get_field('is_new', get_the_ID()),
                ];
                // Process each post item as needed
            }
            wp_reset_postdata();
            $html = ob_get_clean();
            wp_send_json('it works');
        } else {
            wp_send_json_error(['message' =>  $category_id ]);
        }
}
function test()
{
        // This function is for testing AJAX functionality
        wp_send_json('it works');
}

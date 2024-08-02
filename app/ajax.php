<?php

namespace App\Providers;

use WP_Query; // Import WP_Query class

class Ajax
{
    public function __construct()
    {
        $this->addAjax();
    }

    public function addAjax()
    {
        // Hook into AJAX actions
        add_action('wp_ajax_nopriv_test', array($this, 'test'));
        add_action('wp_ajax_test', array($this, 'test'));
        add_action('wp_ajax_nopriv_filter_posts', array($this, 'filterPostsCallBack'));
        add_action('wp_ajax_filter_posts', array($this, 'filterPostsCallBack'));
    }

    public static function localizeScriptVars()
    {
        // Provide JavaScript with localized variables
        return [
            'admin_url' => admin_url('admin-ajax.php')
        ];
    }

    public function test()
    {
        // This function is for testing AJAX functionality
        wp_send_json('it works');
    }

    public function filterPostsCallBack()
    {
        // This function is responsible for processing AJAX requests
        $category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
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

        $query = new WP_Query($args);

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
            wp_send_json_error(['message' => 'No posts found']);
        }
    }
}

// Instantiate the Ajax class to initialize AJAX functionality

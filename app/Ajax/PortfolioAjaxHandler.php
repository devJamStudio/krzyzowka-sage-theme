<?php

namespace App\Ajax;

use WP_Query;

class PortfolioAjaxHandler
{
    public function filterPosts()
    {
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
                echo view('partials.portfolio-item', ['item' => $item])->render();
            }
            wp_reset_postdata();
            $html = ob_get_clean();
            wp_send_json_success([]);
        } else {
            wp_send_json_error(['message' => 'No posts found']);
        }
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

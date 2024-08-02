<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'appThemeColor' => $this->appThemeColor(),
            'siteLogo' => $this->siteLogo(),
            'portfolios' => $this->getPortfolios(),
            'chevron'   => $this->getChevron(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
    public function siteLogo()
    {
        if (function_exists('the_custom_logo')) {
            ob_start();
            the_custom_logo();
            return ob_get_clean();
        }
        return '';
    }
    public function appThemeColor()
    {
        $id = get_the_ID();
        $color = get_field('page_theme_color', $id); // Corrected order of arguments

        if ($color) {
            return 'style="background-color: ' . esc_attr($color) . ';"'; // Output custom color if available
        } else {
            return 'style="background-color:var(--theme-color);"'; // Use default theme color if custom color is not set
        }
    }
    public function getPortfolios()
    {

        global $WP_Query;

        $args = array(
            'post_type' => 'portfolio',
            'meta_query' => array(
               array(
                  'key' => '_thumbnail_id',
                  'compare' => '!='
               )
            )
         );
        return new \WP_Query($args);
    }
    public function getChevron()
    {

        return '<path d="M2.66699 12H20.667" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
        <path d="M16 18C16 14.6863 18.6863 12 22 12" stroke="black" stroke-width="1.5" stroke-miterlimit="10"/>
        <path d="M16 6C16 9.31371 18.6863 12 22 12" stroke="black" stroke-width="1.5" stroke-miterlimit="10"/>
        </svg>';
    }
}

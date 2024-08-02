<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class CategoryFilter extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Category Filter';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Category Filter block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The ancestor block type allow list.
     *
     * @var array
     */
    public $ancestor = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
        'color' => [
            'background' => true,
            'text' => true,
            'gradient' => true,
        ],
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = ['light', 'dark'];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'categories' => [
            ['name' => 'Category One'],
            ['name' => 'Category Two'],
            ['name' => 'Category Three'],
        ],
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Categories'],
        'core/paragraph' => ['placeholder' => 'Select a category to filter posts.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'categories' => $this->categories(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $categoryFilter = Builder::make('category_filter');

        $categoryFilter
            ->addTaxonomy('categories', [
                'label' => 'Select Categories',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'taxonomy' => 'category',
                'field_type' => 'checkbox',
                'allow_null' => 0,
                'add_term' => 1,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ]);

        return $categoryFilter->build();
    }

    /**
     * Retrieve the categories.
     *
     * @return array
     */
    public function categories()
    {
        $category_ids = get_field('categories') ?: [];
        $categories = get_terms([
            'taxonomy' => 'category',
            'include' => $category_ids,
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
        ]);

        return $categories;
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}

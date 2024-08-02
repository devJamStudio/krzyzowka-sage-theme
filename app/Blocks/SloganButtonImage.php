<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class SloganButtonImage extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Slogan Button Image';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A block with a WYSIWYG editor, image upload, and button.';

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
        'items' => [
            [
                'item' => 'Enter your text here...',
                'image' => [
                    'url' => '',
                    'alt' => '',
                ],
                'button' => [
                    'url' => '',
                    'title' => '',
                ],
            ],
        ],
        'button_url' => 'button_url'
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/paragraph' => ['placeholder' => '...'],
        'acf/image' => [
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'mime_types' => 'jpg,jpeg,png',
        ],
        'acf/button' => [
            'field' => 'button',
            'return_format' => 'array',
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'slogan' => $this->slogan(),
            'image' => $this->image(),
            'btn' => $this->btn(),
            'btn_url' => $this->btnUrl(),

        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $sloganButtonImage = Builder::make('slogan_button_image');

        $sloganButtonImage
            ->addWysiwyg('item', ['label' => 'Text', 'wrapper' => ['width' => '50%']])
            ->addImage('image', ['label' => 'Image', 'wrapper' => ['width' => '50%']])
            ->addText('button_text', ['label' => 'Button Text'])
            ->addUrl('button_url', ['label' => 'Button URL']);

        return $sloganButtonImage->build();
    }


    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function slogan()
    {
        return get_field('item') ?: $this->example['items'];
    }
    public function image()
    {
        return get_field('image') ?: $this->example['items'];
    }
    public function btn()
    {
        return get_field('button_text') ?: $this->example['items'];
    }
    public function btnUrl()
    {
        return get_field('button_url') ?: $this->example['button_url'];
    }
    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}

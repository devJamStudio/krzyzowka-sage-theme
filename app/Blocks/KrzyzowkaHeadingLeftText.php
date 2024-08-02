<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class KrzyzowkaHeadingLeftText extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Krzyzowka Heading Left Text';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Krzyzowka Heading Left Text block.';

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
        'header' => 'header',
        'tag_selector' => false,
        'text' => 'text',
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Krzyzowka Heading Right Text block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'header' => $this->header(),
            'text'   => $this->text(),
            'tag_selector'  => $this->tag()
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $krzyzowkaHeadingRightText = Builder::make('krzyzowka_heading_right_text');

        $krzyzowkaHeadingRightText
            ->addTextarea('header')
            ->addWysiwyg('text')
            ->addTrueFalse('tag_selector', [
                'label' => 'H2 / H3',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ]);


        return $krzyzowkaHeadingRightText->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function header()
    {
        return get_field('header') ?: $this->example['header'];
    }
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    public function tag()
    {
        return get_field('tag_selector') ?: $this->example['tag_selector'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}

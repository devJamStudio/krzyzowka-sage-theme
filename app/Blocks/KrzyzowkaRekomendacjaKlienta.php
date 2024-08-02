<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class KrzyzowkaRekomendacjaKlienta extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Krzyzowka Rekomendacja Klienta';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Krzyzowka Rekomendacja Klienta block.';

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
            'avatar' => '',
            'name' => '',
            'text' => '',
            'subtext' => ''

    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Krzyzowka Rekomendacja Klienta block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'avatar' => $this->avatar(),
            'name' => $this->name(),
            'text' => $this->text(),
            'subtext' => $this->subtext(),


        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $krzyzowkaRekomendacjaKlienta = Builder::make('krzyzowka_rekomendacja_klienta');

        $krzyzowkaRekomendacjaKlienta
            ->addImage('avatar')
            ->addText('name')
            ->addWysiwyg('text')
            ->addText('subtext');

        return $krzyzowkaRekomendacjaKlienta->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function avatar()
    {
        return get_field('avatar') ?: $this->example['avatar'];
    }
    public function name()
    {
        return get_field('name') ?: $this->example['name'];
    }
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    public function subtext()
    {
        return get_field('subtext') ?: $this->example['subtext'];
    }
    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}

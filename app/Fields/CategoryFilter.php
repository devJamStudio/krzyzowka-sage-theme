<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class CategoryFilter extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $categoryFilter = Builder::make('category_filter');

        $categoryFilter
            ->setLocation('post_type', '==', 'post');

        $categoryFilter
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $categoryFilter->build();
    }
}

<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class PortfolioGrid extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $portfolioGrid = Builder::make('portfolio_grid');

        $portfolioGrid
            ->setLocation('post_type', '==', 'post');

        $portfolioGrid
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $portfolioGrid->build();
    }
}

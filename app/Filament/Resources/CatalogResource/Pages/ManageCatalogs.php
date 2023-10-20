<?php

namespace App\Filament\Resources\CatalogResource\Pages;

use App\Filament\Resources\CatalogResource;
use App\Models\Catalog;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCatalogs extends ManageRecords
{
    protected static string $resource = CatalogResource::class;

    protected ?string $maxContentWidth = '4xl';

    protected function getActions(): array
    {
        $catalog = Catalog::whereNull('product_id')->first();
        if (!$catalog) {
            return [
                Actions\CreateAction::make()
                    ->modalWidth('md')
                    ->disableCreateAnother(),
            ];
        }
        return [];
    }
}

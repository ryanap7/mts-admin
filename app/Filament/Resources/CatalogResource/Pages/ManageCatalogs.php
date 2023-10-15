<?php

namespace App\Filament\Resources\CatalogResource\Pages;

use App\Filament\Resources\CatalogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCatalogs extends ManageRecords
{
    protected static string $resource = CatalogResource::class;

    protected ?string $maxContentWidth = '4xl';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalWidth('md'),
        ];
    }
}

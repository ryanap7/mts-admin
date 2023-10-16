<?php

namespace App\Filament\Resources\BrandResource\Pages;

use App\Filament\Resources\BrandResource;
use App\Models\Product;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBrands extends ManageRecords
{
    protected static string $resource = BrandResource::class;

    protected ?string $maxContentWidth = '4xl';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
        ];
    }
}

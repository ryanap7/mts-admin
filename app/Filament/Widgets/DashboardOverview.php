<?php

namespace App\Filament\Widgets;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DashboardOverview extends BaseWidget
{
    // protected static string $view = 'filament.widgets.dashboard-overview';
    protected function getCards(): array
    {
        $brands = Brand::get();
        $categories = Category::get();
        $products = Product::get();

        return [
            Card::make('Brands', $brands->count())
                ->description('Total brand yang terdaftar')
                ->descriptionIcon('heroicon-s-sparkles')
                ->color('primary'),
            Card::make('Categories', $categories->count())
                ->description('Total Kategori yang terdaftar')
                ->descriptionIcon('heroicon-s-tag')
                ->color('success'),
            Card::make('Products', $products->count())
                ->description('Total produk yang terdaftar')
                ->descriptionIcon('heroicon-s-cube')
                ->color('warning'),
        ];
    }
}

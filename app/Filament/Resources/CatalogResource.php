<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogResource\Pages;
use App\Filament\Resources\CatalogResource\RelationManagers;
use App\Models\Catalog;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-check';

    protected static ?string $navigationGroup = 'Master Data';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereNull('product_id')->orderBy('name', 'asc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama')
                    ->maxLength(255)
                    ->required(),
                FileUpload::make('file')->label('File')
                    ->directory('file/catalogs')
                    ->acceptedFileTypes(['application/pdf', 'application/vnd.ms-excel', 'text/csv'])
                    ->required()
                    ->hint('pastikan file berbentuk pdf dan excel')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama')
                    ->limit(35)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')->label('Dibuat pada')
                    ->dateTime('d F Y')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('download')
                    ->color('primary')
                    ->icon('heroicon-o-download')
                    ->url(fn (Catalog $record) => route('download.catalog', $record)),
                Tables\Actions\EditAction::make()
                    ->modalWidth('md'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCatalogs::route('/'),
        ];
    }
}

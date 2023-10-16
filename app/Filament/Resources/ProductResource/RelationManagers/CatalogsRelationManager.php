<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use App\Models\Catalog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogsRelationManager extends RelationManager
{
    protected static string $relationship = 'catalogs';

    protected static ?string $recordTitleAttribute = 'name';

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
            ]);
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Action::make('download')
                    ->color('primary')
                    ->icon('heroicon-o-download')
                    ->url(fn (Catalog $record) => route('download.catalog', $record)),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Master Data';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('name', 'asc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make(12)->schema([
                        Select::make('brand_id')->label('Brand')
                            ->relationship('brand', 'name')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->columnSpan(6)
                            ->reactive(),
                        Select::make('category_id')->label('Kategori')
                            ->options(function (Closure $get) {
                                return Category::where('brand_id', $get('brand_id'))->pluck('name', 'id');
                            })
                            ->required()
                            ->searchable()
                            ->preload()
                            ->hint('pilih brand terlebih dahulu')
                            ->columnSpan(6),
                        TextInput::make('name')->label('Name')
                            ->maxLength(255)
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('explanation')->label('Penjelasan Singkat')
                            ->maxLength(255)
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('price')->label('Harga')
                            ->maxLength(255)
                            ->required()
                            ->placeholder('example: 200000')
                            ->columnSpan(6),
                        TextInput::make('size')->label('Ukuran')
                            ->maxLength(255)
                            ->required()
                            ->placeholder('example: Small')
                            ->columnSpan(6),
                        TextInput::make('stock')->label('Stok')
                            ->maxLength(255)
                            ->required()
                            ->placeholder('example: 120 Pcs')
                            ->columnSpan(6),
                        TextInput::make('condition')->label('Kondisi Barang')
                            ->maxLength(255)
                            ->required()
                            ->placeholder('example: New')
                            ->columnSpan(6),
                        FileUpload::make('image')->label('Photo')
                            ->image()
                            ->maxSize(2048)
                            ->directory('img/products')
                            ->columnSpan(6)
                            ->hint('pastikan rasio image 1:1')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('1000')
                            ->imageResizeTargetHeight('1000'),
                        Toggle::make('status')->label('Status')
                            ->required()
                            ->inline(false)
                            ->columnSpan(6),
                        RichEditor::make('description')->label('Deskripsi')
                            ->required()
                            ->columnSpanFull(),
                        RichEditor::make('spesification')->label('Spesifikasi')
                            ->required()
                            ->columnSpanFull(),
                    ])
                ])
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
                TextColumn::make('brand.name')->label('Brand')
                    ->limit(35)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')->label('Kategori')
                    ->limit(35)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('stock')->label('Stok')
                    ->limit(35)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')->label('Harga')
                    ->money('idr', true)
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('status')->label('Status'),
                TextColumn::make('created_at')->label('Dibuat pada')
                    ->dateTime('d F Y')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

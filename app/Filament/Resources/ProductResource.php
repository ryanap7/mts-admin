<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers\CatalogsRelationManager;
use App\Models\Category;
use App\Models\Product;
use Closure;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

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
                        FileUpload::make('image')->label('Photo')
                            ->image()
                            ->maxSize(2048)
                            ->directory('img/products')
                            ->columnSpan(6)
                            ->hint('pastikan ukuran image 280px x 260px')
                            ->rules(Rule::dimensions()->maxWidth(280)->maxHeight(260)),
                        Toggle::make('status')->label('Status')
                            ->required()
                            ->inline(false)
                            ->default(true)
                            ->hint('pastikan brand yang dipilih aktif')
                            ->columnSpan(6),
                        TiptapEditor::make('description')->label('Deskripsi')
                            ->required()
                            ->tools([
                                'heading', 'hr', 'bullet-list', 'ordered-list', 'checked-list',
                                'bold', 'italic', 'lead', 'small',
                                'link', 'media', 'align-left', 'align-justify', 'align-right', 'align-center'
                            ])
                            ->columnSpanFull(),
                        TiptapEditor::make('spesification')->label('Spesifikasi')
                            ->required()
                            ->tools([
                                'heading', 'hr', 'bullet-list', 'ordered-list', 'checked-list',
                                'bold', 'italic', 'lead', 'small',
                                'link', 'media', 'align-left', 'align-justify', 'align-right', 'align-center'
                            ])
                            ->columnSpanFull()
                    ])
                ]),
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
                TextColumn::make('created_at')->label('Dibuat pada')
                    ->dateTime('d F Y')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('status')->label('Status')
                    ->disabled(function (Model $record) {
                        if ($record->brand != null) {
                            return !$record->brand->status;
                        }
                        return true;
                    }),
            ])
            ->filters([
                SelectFilter::make('brand')->label('Brand')
                    ->relationship('brand', 'name'),
                SelectFilter::make('status')->options([
                    true => 'Aktif',
                    false => 'Tidak Aktif'
                ])
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
            CatalogsRelationManager::class
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

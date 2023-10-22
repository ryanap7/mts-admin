<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Filament\Resources\BrandResource\RelationManagers;
use App\Models\Brand;
use App\Models\Product;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rule;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = -2;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('name', 'asc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)->schema([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan(6),
                    Toggle::make('status')
                        ->label('Status')
                        ->default(true)
                        ->required()
                        ->inline(false)
                        ->columnSpan(6),
                    FileUpload::make('image')
                        ->directory('img/brands')
                        ->image()
                        ->maxSize(2048)
                        ->hint('pastikan ukuran image 400px x 200px')
                        ->rules(Rule::dimensions()->maxWidth(400)->maxHeight(200))
                        ->columnSpanFull(),
                    TiptapEditor::make('description')
                        ->label('Deskripsi')
                        ->columnSpanFull()
                        ->tools([
                            'heading', 'hr', 'bullet-list', 'ordered-list', 'checked-list',
                            'bold', 'italic', 'lead', 'small',
                            'link', 'media', 'align-left', 'align-justify'
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->limit(35)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime('d F Y')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateFormDataUsing(function (Model $record, array $data) {
                        self::setStatus($record->id, $data['status']);
                        return $data;
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBrands::route('/'),
        ];
    }

    public static function setStatus($id, $status)
    {
        Product::where('brand_id', $id)->update([
            'status' => $status
        ]);
    }
}

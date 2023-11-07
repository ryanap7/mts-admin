<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = -2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->maxLength(255)
                    ->email()
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->required()
                    ->maxLength(255)
                    ->password()
                    ->minLength(5)
                    ->dehydrated(fn ($state) => filled($state))
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->searchable()
                    ->sortable()
                    ->dateTime('d F Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('change_password')->label('Change Password')
                    ->icon('heroicon-o-exclamation-circle')
                    ->modalWidth('md')
                    ->mountUsing(fn (ComponentContainer $form, Model $record) => $form->fill([
                        'id' => $record->id
                    ]))
                    ->form([
                        Hidden::make('id'),
                        TextInput::make('password')
                            ->required()
                            ->maxLength(255)
                            ->password()
                            ->minLength(5)
                            ->confirmed(),
                        TextInput::make('password_confirmation')
                            ->required()
                            ->maxLength(255)
                            ->password(),
                    ])
                    ->action(fn (array $data) => self::changePassword($data)),
                ActionGroup::make([
                    Tables\Actions\EditAction::make()
                    ->modalWidth('md')
                    ->form([
                        TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->required()
                        ->maxLength(255)
                        ->email()
                        ->unique(ignoreRecord: true),
                    ]),
                Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUsers::route('/'),
        ];
    }   
    
    public static function changePassword($data)
    {
        $user = User::find($data['id']);
        $user->password = Hash::make($data['password']);
        $user->save();
        return Notification::make()
            ->success()
            ->title('Password has been changed')
            ->send();
    }
}

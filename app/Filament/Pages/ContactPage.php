<?php

namespace App\Filament\Pages;

use App\Models\Contact;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\EditAction;
use Filament\Pages\Page;

class ContactPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.contact-page';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $title = 'Contacts';

    public $contact;

    public function mount()
    {
        $this->contact = Contact::first();
    }


    protected function getActions(): array
    {
        return [
            EditAction::make('contact')
                ->label('Edit Contact')
                ->modalWidth('md')
                ->modalHeading('Edit Contact')
                ->mountUsing(fn (ComponentContainer $form) => $form->fill([
                    'phone' => $this->contact->phone,
                    'email' => $this->contact->email,
                    'address' => $this->contact->address,
                    'google_map_link' => $this->contact->google_map_link,
                ]))
                ->form([
                    TextInput::make('phone')->label('No. Telepon')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')->label('Email')
                        ->required()
                        ->email()
                        ->maxLength(255),
                    Textarea::make('address')->label('Alamat')
                        ->required(),
                    TextInput::make('google_map_link')->label('Link Google Map')
                        ->required()
                        ->maxLength(255),
                ])
                ->modalButton('Save change')
                ->action(fn (array $data) => $this->updateContact($data))
        ];
    }

    public function updateContact(array $data)
    {
        if (substr($data['phone'], 0, 1) == 6) {
            $data['phone'] = "+" . $data['phone'];
        }
        $this->contact->update($data);
        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }
}

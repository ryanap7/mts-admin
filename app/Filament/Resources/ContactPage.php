<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\EditAction;
use Filament\Resources\Pages\Page;

class ContactPage extends Page
{
    protected static string $resource = ContactResource::class;

    protected static string $view = 'filament.resources.contact-resource.pages.contact-page';

    protected static ?string $title = 'Contacts';

    public $contact;

    public function mount()
    {
        $this->contact = Contact::first();
    }


    protected function getActions(): array
    {
        return [
            EditAction::make('product')
                ->label('Edit Product')
                ->modalWidth('md')
                ->modalHeading('Edit Product')
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
        ];
    }
}

<?php

namespace App\Filament\Pages;

use App\Models\Statistic;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\EditAction;
use Filament\Pages\Page;

class StatisticPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.statistic-page';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $title = 'Statistics';

    public $project_completed;
    public $customers;
    public $products_me;
    public $portfolio;

    public function mount()
    {
        $this->project_completed = Statistic::find(1);
        $this->customers = Statistic::find(2);
        $this->products_me = Statistic::find(3);
        $this->portfolio = Statistic::find(4);
    }


    protected function getActions(): array
    {
        return [
            EditAction::make('statistics')
                ->label('Edit Statistic')
                ->modalWidth('md')
                ->modalHeading('Edit Product')
                ->mountUsing(fn (ComponentContainer $form) => $form->fill([
                    'project_completed' => $this->project_completed->value,
                    'customers' => $this->customers->value,
                    'products_me' => $this->products_me->value,
                    'portfolio' => $this->portfolio->value,
                ]))
                ->form([
                    TextInput::make('project_completed')->label('Project Completed')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('customers')->label('Customers')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('products_me')->label('Products Me')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('portfolio')->label('Portfolio')
                        ->required()
                        ->maxLength(255),
                ])
                ->modalButton('Save change')
                ->action(fn (array $data) => $this->updateStatistic($data))
        ];
    }

    public function updateStatistic(array $data)
    {
        $this->project_completed->update([
            'value' => $data['project_completed']
        ]);
        $this->customers->update([
            'value' => $data['customers']
        ]);
        $this->products_me->update([
            'value' => $data['products_me']
        ]);
        $this->portfolio->update([
            'value' => $data['project_completed']
        ]);

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }
}

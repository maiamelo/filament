<?php

namespace App\Filament\Pages;

use App\Forms\Components\CustomPlaceholder;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                CustomPlaceholder::make('title')
                    ->label( Auth()->user()->name)
                    ->content('Confira seus dados e altere caso necessário.'),
                    
                ViewField::make('hr')
                ->view('forms.components.hr'),
                
                Group::make([
                    
                    Placeholder::make('name')
                        ->columnSpan(1),
                        
                    TextInput::make('name')
                        ->required()
                        ->hiddenLabel()
                        ->columnSpan(5),
                        
                ])->columns(6),
                
                Group::make([
                    
                    Placeholder::make('email')
                        ->columnSpan(1),
                        
                    TextInput::make('email')
                        ->required()
                        ->hiddenLabel()
                        ->columnSpan(5),
                        
                ])->columns(6),

                Group::make([
                    
                    Placeholder::make('Whatsapp')
                        ->columnSpan(1),
                        
                    TextInput::make('Whatsapp')
                        ->required()
                        ->hiddenLabel()
                        ->columnSpan(5),
                        
                ])->columns(6),

                ViewField::make('hr')
                ->view('forms.components.hr'),

  
         
                
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';




    protected static ?string $title = 'Custom Page Title';
 
    protected static ?string $navigationLabel = 'Custom Navigation Label';
     
    protected static ?string $slug = 'custom-url-slug';

   
    protected static string $view = 'filament.pages.settings';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // TextInput::make('name')->id('name-field')
        ]);
    }
    protected function getFormSchema(): array
    {
        return [
            // TextInput::make('name')->id('name-field')
        ];
    }

}

<?php

namespace App\Filament\Resources\GeneralSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GeneralSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_title')
                    ->required()
                    ->maxLength(255),
                Toggle::make('maintenance_mode')
                    ->label('Maintenance Mode')
                    ->helperText('Enable to put the site in maintenance mode.'),
                ColorPicker::make('primary_color')
                    ->label('Primary Color'),
                ColorPicker::make('secondary_color')
                    ->label('Secondary Color'),
                FileUpload::make('logo')
                    ->image()
                    ->directory('settings')
                    ->visibility('public')
                    ->columnSpanFull(),
            ]);
    }
}

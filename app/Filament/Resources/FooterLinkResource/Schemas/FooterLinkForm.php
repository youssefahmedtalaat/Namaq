<?php

namespace App\Filament\Resources\FooterLinkResource\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FooterLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'news' => 'Latest News',
                        'service' => 'Our Services',
                    ])
                    ->required(),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}

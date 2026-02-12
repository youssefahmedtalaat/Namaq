<?php

namespace App\Filament\Resources\GeneralSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;

class GeneralSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Footer: About Us')
                    ->schema([
                        TextInput::make('footer_about_title')
                            ->label('Title')
                            ->required(),
                        RichEditor::make('footer_about_description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),

                Section::make('Footer: Contact Info')
                    ->schema([
                        TextInput::make('footer_contact_address')
                            ->label('Address'),
                        TextInput::make('footer_contact_phone')
                            ->label('Phone'),
                        TextInput::make('footer_contact_fax')
                            ->label('Fax'),
                        TextInput::make('footer_contact_email')
                            ->label('Email')
                            ->email(),
                        TextInput::make('footer_contact_website')
                            ->label('Website')
                            ->url(),
                    ])->columns(2),

                Section::make('Footer: Section Titles')
                    ->schema([
                        TextInput::make('footer_news_title')
                            ->label('News Section Title')
                            ->required(),
                        TextInput::make('footer_services_title')
                            ->label('Services Section Title')
                            ->required(),
                    ])->columns(2),

                Section::make('Footer: Copyright')
                    ->schema([
                        TextInput::make('footer_copyright')
                            ->label('Copyright Text')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}

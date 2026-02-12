<?php

namespace App\Filament\Resources\FooterLinkResource\Pages;

use App\Filament\Resources\FooterLinkResource;
use App\Models\GeneralSetting;
use Filament\Actions;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;

class ListFooterLinks extends ListRecords
{
    protected static string $resource = FooterLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('editAbout')
                ->label('Edit About Us')
                ->icon('heroicon-o-pencil-square')
                ->fillForm(fn () => GeneralSetting::first()?->toArray() ?? [])
                ->form([
                    TextInput::make('footer_about_title')
                        ->label('Title')
                        ->required(),
                    RichEditor::make('footer_about_description')
                        ->label('Description')
                        ->required(),
                ])
                ->action(function (array $data) {
                    $settings = GeneralSetting::firstOrNew(['id' => 1]);
                    $settings->fill($data);
                    $settings->save();
                }),

            Actions\Action::make('editContact')
                ->label('Edit Contact Us')
                ->icon('heroicon-o-phone')
                ->fillForm(fn () => GeneralSetting::first()?->toArray() ?? [])
                ->form([
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
                ])
                ->action(function (array $data) {
                    $settings = GeneralSetting::firstOrNew(['id' => 1]);
                    $settings->fill($data);
                    $settings->save();
                }),

            Actions\CreateAction::make()
                ->label('Add Link'),
        ];
    }
}

<?php

namespace App\Filament\Resources\GeneralSettings\Tables;

use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;

class GeneralSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('footer_about_title')
                    ->label('About Title'),
                TextColumn::make('footer_news_title')
                    ->label('News Title'),
                TextColumn::make('footer_services_title')
                    ->label('Services Title'),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

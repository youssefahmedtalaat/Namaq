<?php

namespace App\Filament\Resources\GeneralSettings;

use App\Filament\Resources\GeneralSettings\Pages\CreateGeneralSetting;
use App\Filament\Resources\GeneralSettings\Pages\EditGeneralSetting;
use App\Filament\Resources\GeneralSettings\Pages\ListGeneralSettings;
use App\Filament\Resources\GeneralSettings\Schemas\GeneralSettingForm;
use App\Filament\Resources\GeneralSettings\Tables\GeneralSettingsTable;
use App\Models\GeneralSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GeneralSettingResource extends Resource
{
    protected static ?string $model = GeneralSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'footer_about_title';

    public static function form(Form $form): Form
    {
        return GeneralSettingForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return GeneralSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGeneralSettings::route('/'),
            'create' => CreateGeneralSetting::route('/create'),
            'edit' => EditGeneralSetting::route('/{record}/edit'),
        ];
    }
}

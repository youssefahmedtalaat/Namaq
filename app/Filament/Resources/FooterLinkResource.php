<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterLinkResource\Pages;
use App\Filament\Resources\FooterLinkResource\Schemas\FooterLinkForm;
use App\Filament\Resources\FooterLinkResource\Tables\FooterLinksTable;
use App\Models\FooterLink;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class FooterLinkResource extends Resource
{
    protected static ?string $model = FooterLink::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-link';
    
    protected static string|\UnitEnum|null $navigationGroup = 'Footer Settings';

    public static function form(Schema $schema): Schema
    {
        return FooterLinkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FooterLinksTable::configure($table);
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
            'index' => Pages\ListFooterLinks::route('/'),
            'create' => Pages\CreateFooterLink::route('/create'),
            'edit' => Pages\EditFooterLink::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoSettingResource\Pages;
use App\Models\SeoSetting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoSettingResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'SEO Settings';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('page_identifier')
                    ->label('Page Identifier')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('e.g., home, about, contact'),
                Section::make('SEO Details')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->rows(3),
                        Textarea::make('meta_keywords')
                            ->rows(2),
                        FileUpload::make('og_image')
                            ->image()
                            ->directory('seo')
                            ->visibility('public'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_identifier')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('meta_title')
                    ->searchable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSeoSettings::route('/'),
            'create' => Pages\CreateSeoSetting::route('/create'),
            'edit' => Pages\EditSeoSetting::route('/{record}/edit'),
        ];
    }
}

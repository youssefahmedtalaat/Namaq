<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('region')
                    ->label('Location')
                    ->required(),
                Select::make('date')
                    ->label('Year')
                    ->options(array_combine(range(date('Y'), 1950), range(date('Y'), 1950)))
                    ->searchable()
                    ->required(),
                Select::make('category')
                    ->options([
                        'Commercial' => 'Commercial',
                        'Architectural' => 'Architectural',
                        'Administrative' => 'Administrative',
                        'Interior' => 'Interior',
                        'Exterior' => 'Exterior',
                    ])
                    ->required(),
                TextInput::make('size_sqm')
                    ->required()
                    ->numeric(),
                FileUpload::make('main_image')
                    ->image()
                    ->required()
                ->disk('public')
                    ->columnSpanFull(),
                FileUpload::make('gallery_images')
                    ->image()
                    ->multiple()
                    ->required()
                ->disk('public')
                    ->columnSpanFull(),
                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Section::make('SEO Details')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->rows(3),
                        Textarea::make('meta_keywords')
                            ->rows(2)
                            ->helperText('Separate keywords with commas'),
                    ])
                    ->collapsible(),
            ]);
    }
}

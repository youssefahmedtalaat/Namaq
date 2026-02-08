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
                DatePicker::make('date')
                    ->label('Completion Date')
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
                    ->reorderable()
                    ->required()
                ->disk('public')
                    ->columnSpanFull(),
                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Section::make('SEO Details')
                    ->description('Optimize your project for search engines like Google.')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->placeholder('e.g. Modern Villa Design in Khobar - Namaq')
                            ->helperText('Ideal length: 50-60 characters.'),
                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(3)
                            ->placeholder('e.g. Explore our latest modern villa project in Khobar, featuring minimalist design and sustainable materials.')
                            ->helperText('Ideal length: 150-160 characters.'),
                        Textarea::make('meta_keywords')
                            ->label('Keywords')
                            ->rows(2)
                            ->placeholder('interior design, khobar, villa, modern')
                            ->helperText('Separate keywords with commas. Example: architecture, design, saudi arabia'),
                    ])
                    ->collapsible(),
            ]);
    }
}

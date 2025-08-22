<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                    ->required(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('size_sqm')
                    ->required()
                    ->numeric(),
                FileUpload::make('main_image')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gallery_images')
                    ->image()
                    ->multiple()
                    ->required()
                    ->columnSpanFull(),
                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

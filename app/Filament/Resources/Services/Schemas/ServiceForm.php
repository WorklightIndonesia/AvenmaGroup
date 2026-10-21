<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_id')
                    ->label('Service Name (Indonesian)')
                    ->required()
                    ->maxLength(255),

                TextInput::make('name_en')
                    ->label('Service Name (English)')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description_id')
                    ->label('Short Description (Indonesian)')
                    ->rows(3),

                Textarea::make('description_en')
                    ->label('Short Description (English)')
                    ->rows(3),

                Textarea::make('details_id')
                    ->label('Popup Details (Indonesian)')
                    ->rows(5),

                Textarea::make('details_en')
                    ->label('Popup Details (English)')
                    ->rows(5),

                TextInput::make('icon')
                    ->label('Icon Name')
                    ->helperText('Optional; we can decide the icon format later.'),

                FileUpload::make('image_path')
                    ->label('Service Image')
                    ->image()
                    ->directory('services')
                    ->nullable(),

                TextInput::make('sort_order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_published')
                    ->label('Published')
                    ->default(false),
            ]);
    }
}
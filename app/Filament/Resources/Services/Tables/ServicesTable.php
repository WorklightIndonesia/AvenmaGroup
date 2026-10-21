<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_id')
                    ->label('Service Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name_en')
                    ->label('English Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Display Order')
                    ->sortable(),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),
                
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
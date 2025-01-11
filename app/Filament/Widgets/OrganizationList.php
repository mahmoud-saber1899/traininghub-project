<?php

namespace App\Filament\Widgets;

use App\Models\Organization;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class OrganizationList extends BaseWidget
{
    protected string|int|array $columnSpan = 'full'; // Make the widget span the full width

    public function table(Table $table): Table
    {
        return $table
            ->query(Organization::query()) // Query organizations
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Organization Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('average_rating')
                    ->label('Rating')
                    ->formatStateUsing(function ($state) {
                        return str_repeat('⭐', $state); // Display stars based on the rating
                    }),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                // Add actions if needed
            ])
            ->bulkActions([
                // Add bulk actions if needed
            ]);
    }
}

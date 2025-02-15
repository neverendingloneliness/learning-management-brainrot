<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoadmapResource\Pages;
use App\Filament\Resources\RoadmapResource\RelationManagers;
use App\Models\Roadmap;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoadmapResource extends Resource
{
    protected static ?string $model = Roadmap::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_roadmap')
                    ->openable()
                    ->directory('gambar_roadmap')
                    ->image()
                ,
                Forms\Components\TextInput::make('title_roadmap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi_roadmap')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar_roadmap')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title_roadmap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_roadmap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRoadmaps::route('/'),
            'create' => Pages\CreateRoadmap::route('/create'),
            'edit' => Pages\EditRoadmap::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaintextResource\Pages;
use App\Filament\Resources\MaintextResource\RelationManagers;
use App\Models\Maintext;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

class MaintextResource extends Resource
{
    protected static ?string $model = Maintext::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'Статьи';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                RichEditor::make('body')->columnSpan('full'),
                TextInput::make('url')->required(),
                Select::make('status')
                    ->options([
                        'ru' => 'Русский',
                        'en' => 'English',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('body')->limit(20)->html(),
                TextColumn::make('url'),
                TextColumn::make('lang')
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
            'index' => Pages\ListMaintexts::route('/'),
            'create' => Pages\CreateMaintext::route('/create'),
            'edit' => Pages\EditMaintext::route('/{record}/edit'),
        ];
    }
}

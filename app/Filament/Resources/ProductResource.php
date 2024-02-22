<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use App\Models\Catalog;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ImageColumn;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'Продукты';
    public static function form(Form $form): Form
    {
        $arr = [];
        $catalogs = Catalog::orderBy('id')->whereNull('parent_id')->get();
        foreach($catalogs as $catalog){  
            $arr[$catalog->name] = $catalog->children()->pluck('name', 'id')->toArray();
        }
        // dd($arr);
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('price'),
                TextInput::make('sale'),
                TextInput::make('sale_measure'),
                TextInput::make('articul'), 
                Select::make('catalog_id')
                    ->options($arr)->searchable(),
                Textarea::make('description')->columnSpan('full'),
                RichEditor::make('fulldescription')->columnSpan('full'),
                FileUpload::make('picture')->directory('pictures')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price'),
                TextColumn::make('articul'), 
                TextColumn::make('catalog.name'),
                TextColumn::make('description')->limit(20)->html(),
                ImageColumn::make('picture')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

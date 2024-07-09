<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company_name')
                ->label('Company name')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('category_name')
                ->label('Category name')
                ->options([
                    "Accountant" => "Accountant",
                    "Advocacy" => "Advocacy",
                    "Banking" => "Banking",
                    "Business" => "Business",
                    "Consultancy" => "Consultancy",
                    "Concierge" => "Concierge",
                    "Dentist" => "Dentist",
                    "General medicine" => "General medicine",
                    "Gynecologist" => "Gynecologist",
                    "Family Office" => "Family Office",
                    "Insurance" => "Insurance",
                    "Onboarding" => "Onboarding",
                    "Real Estate" => "Real Estate",

                ])
                ->required(),
                Forms\Components\TextInput::make('location')
                ->label('Location')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('url')
                ->label('URL')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('map')
                ->label('Map / Contact')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('image_url')
                ->label('Image URL')
                ->required()
                ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                ->label('Description')
                ->required()
                ->columnSpanFull()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('category_name')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('url')
                    ->searchable(),
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}

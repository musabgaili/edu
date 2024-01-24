<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ServiceResource extends Resource
{

    use Translatable;

    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Data')->schema([
                    TranslatableContainer::make(
                        Forms\Components\TextInput::make('name')
                            ->maxLength(255)
                            ->required()
                    ),
                    TranslatableContainer::make(
                        Forms\Components\TextInput::make('content')
                            ->maxLength(255)
                            ->required()
                    ),
                    // TranslatableContainer::make(
                    //     Forms\Components\TextInput::make('agenda')
                    //         ->maxLength(255)
                    //         ->required()
                    // ),
                ])->columnSpan(1),
                Section::make('Control Data')->schema([
                    FileUpload::make('thumbnail')->directory('services')->columnSpanFull(),
                    
                    Toggle::make('published')->default(true)->required(),
                    
                ])->columnSpan(1)->columns(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // FileUpload::make('thumbnail'),
                TextColumn::make('name'),
                TextColumn::make('content'),
                TextColumn::make('agenda'),
                TextColumn::make('duration'),
                // Toggle::make('published')->default(true),
                // Toggle::make('home_screen')->default(false),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}

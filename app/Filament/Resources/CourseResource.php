<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class CourseResource extends Resource
{
    use Translatable;
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

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
                    TranslatableContainer::make(
                        Forms\Components\TextInput::make('agenda')
                            ->maxLength(255)
                            ->required()
                    ),
                ])->columnSpan(1),
                Section::make('Control Data')->schema([
                    FileUpload::make('thumbnail')->directory('courses')->columnSpanFull(),
                    TextInput::make('duration')->label("Duration , By Weeks")->required()->type("number")->columnSpanFull(),
                    Toggle::make('published')->default(true)->required(),
                    Toggle::make('home_screen')->default(false)->required(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}

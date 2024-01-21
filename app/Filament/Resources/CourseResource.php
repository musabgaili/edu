<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Filament\Resources\CourseResource\RelationManagers\ApplicationsRelationManager;
use App\Models\Course;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;
use Illuminate\Support\Str;

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
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->rules(['alpha_dash'])
                        ->unique(ignoreRecord: true),

                    TranslatableContainer::make(
                        Forms\Components\TextInput::make('name')
                            ->maxLength(255)
                            ->required()
                    )->live(debounce: 1200) // Method 1: Pass a debounce value here
                        ->afterStateUpdated(function (Set $set, $state, $context) {
                            if ($context === 'edit') {
                                return;
                            }
                            $set('slug', Str::slug($state['en'] . '-'. Str::random(6)));
                        }),
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
                // 
                Section::make('Control Data')->schema([
                    TranslatableContainer::make(
                        FileUpload::make('thumbnail')->directory('courses')->columnSpanFull(),
                    ),
                    Section::make('')->schema([
                        Select::make("duration_type")->label(" Duration type Hours,Days,Weeks,Months")->options([
                            'hours' => "Hours",
                            'days' => "Days",
                            'weeks' => 'Weeks',
                            'months' => "Months"
                        ])->default('weeks')
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('duration')->label("Duration")->required()->type("number")->columnSpan(1),
                    ])->columns(1),
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
                TextColumn::make('content')->limit(20),
                TextColumn::make('agenda'),
                TextColumn::make('duration'),
                ToggleColumn::make('published'),
                ToggleColumn::make('home_screen'),
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
            ApplicationsRelationManager::class
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

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseApplicationResource\Pages;
use App\Filament\Resources\CourseApplicationResource\RelationManagers;
use App\Models\Course;
use App\Models\CourseApplication;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseApplicationResource extends Resource
{
    protected static ?string $model = CourseApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('phone')->required(),
                Select::make('type')->options([
                    'student' => 'Student',
                    'parent' => 'Parent',
                    'manager' => 'Manager',
                ])->default('manager')->required(),

                Select::make('course_id') ->label('Course')->options(
                    Course::all()->pluck('name', 'id',),
                )->required(),
                Textarea::make('message')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type'),
                TextColumn::make('email'),
                TextColumn::make('course.name'),
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
            'index' => Pages\ListCourseApplications::route('/'),
            'create' => Pages\CreateCourseApplication::route('/create'),
            'edit' => Pages\EditCourseApplication::route('/{record}/edit'),
        ];
    }
}

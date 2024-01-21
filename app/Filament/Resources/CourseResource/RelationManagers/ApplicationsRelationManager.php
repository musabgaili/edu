<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
// use pxlrbt\FilamentExcel\Actions\\ExportAction;


class ApplicationsRelationManager extends RelationManager
{
    protected static string $relationship = 'applications';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('phone'),
                TextInput::make('created_at')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('type')
            ->columns([
                TextColumn::make('type'),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->label('New Application'),
                ExportAction::make()->label('Export Data')->exports([
                    ExcelExport::make('table')->fromTable()
                        // ->withFilename(fn ($resource) => $resource::getModelLabel() . '-' . date('Y-m-d'))
                        ->withFilename(function ($resource) {
                            dump($resource);
                            // $resource::getModelLabel() . '-' . date('Y-m-d');
                            
                        })

                        ->withWriterType(\Maatwebsite\Excel\Excel::CSV)
                        ->withColumns([
                            Column::make('created_at'),
                        ])
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

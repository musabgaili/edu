<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use Filament\Actions;
// use Filament\Actions\ExportAction;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use Filament\Resources\Pages\EditRecord;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class EditCourse extends EditRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable(),
                ExcelExport::make('form')->fromForm(),
            ])
        ];
    }
}

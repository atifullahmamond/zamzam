<?php

namespace App\Filament\Resources\JamiResource\Pages;

use App\Filament\Resources\JamiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJamis extends ListRecords
{
    protected static string $resource = JamiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

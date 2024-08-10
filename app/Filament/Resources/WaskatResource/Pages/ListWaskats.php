<?php

namespace App\Filament\Resources\WaskatResource\Pages;

use App\Filament\Resources\WaskatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWaskats extends ListRecords
{
    protected static string $resource = WaskatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

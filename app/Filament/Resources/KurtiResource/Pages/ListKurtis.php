<?php

namespace App\Filament\Resources\KurtiResource\Pages;

use App\Filament\Resources\KurtiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurtis extends ListRecords
{
    protected static string $resource = KurtiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

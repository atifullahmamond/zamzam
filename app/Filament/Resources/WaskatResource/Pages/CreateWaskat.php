<?php

namespace App\Filament\Resources\WaskatResource\Pages;

use App\Filament\Resources\WaskatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWaskat extends CreateRecord
{
    protected static string $resource = WaskatResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('print', ['id' => $this->getRecord()->id]);
    }
}

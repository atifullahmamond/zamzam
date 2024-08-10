<?php

namespace App\Filament\Resources\KurtiResource\Pages;

use App\Filament\Resources\KurtiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKurti extends CreateRecord
{
    protected static string $resource = KurtiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('print', ['id' => $this->getRecord()->id]);
    }
}

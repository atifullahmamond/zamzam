<?php

namespace App\Filament\Resources\JamiResource\Pages;

use App\Filament\Resources\JamiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJami extends CreateRecord
{
    protected static string $resource = JamiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('print', ['id' => $this->getRecord()->id]);
    }

}

<?php

namespace App\Filament\Resources\WaskatResource\Pages;

use App\Filament\Resources\WaskatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWaskat extends EditRecord
{
    protected static string $resource = WaskatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('print', ['id' => $this->getRecord()->id]);
    }
}

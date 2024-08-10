<?php

namespace App\Filament\Resources\KurtiResource\Pages;

use App\Filament\Resources\KurtiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurti extends EditRecord
{
    protected static string $resource = KurtiResource::class;

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

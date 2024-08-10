<?php

namespace App\Filament\Resources\JamiResource\Pages;

use App\Filament\Resources\JamiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJami extends EditRecord
{
    protected static string $resource = JamiResource::class;

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

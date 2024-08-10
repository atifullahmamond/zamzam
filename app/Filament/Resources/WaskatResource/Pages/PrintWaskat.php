<?php

namespace App\Filament\Resources\WaskatResource\Pages;

use App\Filament\Resources\WaskatResource;
use App\Models\Waskat;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PrintWaskat extends Page
{
    protected static string $resource = WaskatResource::class;

    protected static string $view = 'filament.resources.waskat-resource.pages.print-waskat';

    protected static string $layout = 'components.layouts.app';


    public Waskat $record;
    public function mount(Request $request, Waskat $record): void
    {
        $id = $request->input('id');
        $this->record = Waskat::findOrFail($id);
    }

    public function render(): View
    {
        return view('filament.resources.waskat-resource.pages.print-waskat', [
            'report' => $this->record,
        ]);
    }
}

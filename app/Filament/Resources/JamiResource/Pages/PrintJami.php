<?php

namespace App\Filament\Resources\JamiResource\Pages;

use App\Filament\Resources\JamiResource;
use Filament\Resources\Pages\Page;
use App\Models\Jami;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class PrintJami extends Page
{

    protected static string $resource = JamiResource::class;

    protected static string $view = 'filament.resources.jami-resource.pages.print-jami';
    protected static string $layout = 'components.layouts.app';


    public Jami $record;
    public function mount(Request $request, Jami $record): void
    {
        $id = $request->input('id');
        $this->record = Jami::findOrFail($id);
    }

    public function render(): View
    {
        return view('filament.resources.jami-resource.pages.print-jami', [
            'report' => $this->record,
        ]);
    }
}

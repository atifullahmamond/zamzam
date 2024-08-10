<?php

namespace App\Filament\Resources\KurtiResource\Pages;

use App\Filament\Resources\KurtiResource;
use App\Models\Kurti;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PrintKurti extends Page
{
    protected static string $resource = KurtiResource::class;

    protected static string $view = 'filament.resources.kurti-resource.pages.print-kurti';

    protected static string $layout = 'components.layouts.app';


    public Kurti $record;
    public function mount(Request $request, Kurti $record): void
    {
        $id = $request->input('id');
        $this->record = Kurti::findOrFail($id);
    }

    public function render(): View
    {
        return view('filament.resources.kurti-resource.pages.print-kurti', [
            'report' => $this->record,
        ]);
    }
}

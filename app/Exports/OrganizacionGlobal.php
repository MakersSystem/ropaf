<?php

namespace App\Exports;

use App\Organizacion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class OrganizacionGlobal implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('content.reportGlobal', [
            'organizacion' => Organizacion::all()
        ]);
    }
}

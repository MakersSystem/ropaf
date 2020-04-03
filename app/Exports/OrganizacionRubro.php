<?php

namespace App\Exports;

use App\Organizacion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class OrganizacionRubro implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('content.reportRubro', [
            'organizacion' => Organizacion::all()
        ]);
    }
}

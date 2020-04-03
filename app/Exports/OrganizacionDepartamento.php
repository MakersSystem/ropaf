<?php

namespace App\Exports;

use App\Organizacion;
use App\Organizacionales;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class OrganizacionDepartamento implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('content.reportDepartamento', [
            'organizacion' => Organizacion::all(),
            'organizacionales' => Organizacionales::all()
        ]);
    }
}

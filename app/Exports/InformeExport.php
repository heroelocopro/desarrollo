<?php

namespace App\Exports;

use App\Models\informe;
use Maatwebsite\Excel\Concerns\FromCollection;

class InformeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return informe::all();
    }
}

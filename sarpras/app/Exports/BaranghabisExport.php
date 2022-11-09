<?php

namespace App\Exports;

use App\Models\Baranghabis;
use Maatwebsite\Excel\Concerns\FromCollection;

class BaranghabisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Baranghabis::all();
    }
}

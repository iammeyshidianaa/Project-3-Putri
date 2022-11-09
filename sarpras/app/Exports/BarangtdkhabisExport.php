<?php

namespace App\Exports;

use App\Models\databarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangtdkhabisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return databarang::all();
    }
}

<?php

namespace App\Exports;

use App\Models\peminjamanadmin;
use Maatwebsite\Excel\Concerns\FromCollection;

class RiwayatPinjam_siswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peminjamanadmin::all();
    }
}

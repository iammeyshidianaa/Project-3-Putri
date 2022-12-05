<?php

namespace Database\Seeders;

use App\Models\Pinjambarang;
use Illuminate\Database\Seeder;

class DendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
       Pinjambarang::create([
        'namapeminjam'=>'',
        'kelas'=>'',
        'namabarang3'=>'',
        'tanggalpinjam'=>now()->addDays(10),
        'tanggalkembali'=>now()->addDays(20),
        'pengembalian'=>now()->subDays(11),
       ]);


    }
}

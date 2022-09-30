<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    protected $fillable = [
    'id',
    'kategorii',
    'nama_barang1' ,
    'merek1' ,
    'stok1' ,
    'deskripsi',

    ];

    public function kategori()
    {
        return $this->belongsTo(databarang::class);
    }

    public function kategori1()
    {
        return $this->belongsTo(Baranghabis::class);
    }




}

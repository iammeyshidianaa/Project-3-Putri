<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ID_Kategori extends Model
{
    protected $table = 'barangmasuks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_kategori' ,

        ];



    public function id_kategori()
    {
        return $this->belongsTo(ID_Kategori::class);
    }

    // public function nama_barang1()
    // {
    //     return $this->belongsTo(ID_Kategori::class);
    // }


}

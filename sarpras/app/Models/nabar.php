<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nabar extends Model
{
    protected $table = 'nabars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nabarr' ,

        ];



    public function nama_barang()
    {
        return $this->belongsTo(databarang::class);
    }

    public function nama_barang1()
    {
        return $this->belongsTo(Baranghabis::class);
    }


}

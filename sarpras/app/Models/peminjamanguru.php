<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanguru extends Model
{
    protected $table = 'peminjamangurus';
    protected $guarded = [];

    public function ruang()
    {
        return $this->belongsTo(ruang::class);
    }
    
    public function id_barang()
    {
        return $this->hasMany(barangmasuk::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'barangmasuks';
    protected $guarded = [];



    public function id_barang()
    {
        return $this->hasMany(barangmasuk::class);
    }
}

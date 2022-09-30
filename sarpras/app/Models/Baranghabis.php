<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baranghabis extends Model
{
    protected $table = 'Baranghabis';
    protected $guarded = [];



    public function kategori1()
    {
        return $this->hasMany(Baranghabis::class);
    }
}

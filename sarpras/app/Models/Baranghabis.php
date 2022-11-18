<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baranghabis extends Model
{
    protected $table = 'baranghabis';
    protected $guarded = [];


    public function ruang()
    {
        return $this->belongsTo(ruang::class);
    }

    public function barangmasuk()
    {
        return $this->hasMany(barangmasuk::class);
    }

    // public function masuk()
    // {
    //     return $this->hasMany('App\Models\barangmasuk');
    // }


}

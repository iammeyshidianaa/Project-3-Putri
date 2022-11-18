<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class barangmasuk extends Model
{
    protected $table = 'barangmasuks';
    protected $guarded = [];


    public function ruang()
    {
        return $this->belongsTo(ruang::class);
    }

    public function Baranghabis()
    {
        return $this->belongsTo(Baranghabis::class);
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_pembelian'])
        ->translatedFormat('l, d F Y');
    }


    // public function masuk()
    // {
    //     return $this->belongsTo('App\Models\Baranghabis');
    // }


}

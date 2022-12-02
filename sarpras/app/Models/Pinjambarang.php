<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pinjambarang extends Model
{
    protected $table = 'peminjamanadmins';
    protected $guarded = [];

    public function ruang(){
        return $this->belongsTo(ruang::class);
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('Y-m-d');
    }
    
}

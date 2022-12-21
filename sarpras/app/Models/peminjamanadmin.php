<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\ruang;

class peminjamanadmin extends Model
{
    protected $table = 'peminjamanadmins';
    protected $guarded = [];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('Y-m-d');
    }

    public function kelasku()
    {
        return $this->belongsTo(ruang::class, 'kelas', 'id');
    }
}

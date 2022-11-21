<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjambarang extends Model
{
    protected $table = 'peminjamanadmins';
    protected $guarded = [];

    public function ruang(){
        return $this->belongsTo(ruang::class);
    }
}

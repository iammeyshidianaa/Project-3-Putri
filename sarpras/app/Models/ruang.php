<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    protected $table = 'ruangs';
    protected $guarded = [];

    public function baranghabis()
    {
        return $this->hasMany(baranghabis::class);
    }

    public function databarang()
    {
        return $this->hasMany(databarang::class);
    }
}

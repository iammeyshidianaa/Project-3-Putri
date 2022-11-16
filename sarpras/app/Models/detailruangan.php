<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailruangan extends Model
{
    public function ruang()
    {
        return $this->belongsTo(ruang::class);
    }
}

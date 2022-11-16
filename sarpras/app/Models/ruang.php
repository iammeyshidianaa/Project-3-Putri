<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    protected $table = 'ruangs';
    protected $guarded = [];

    public function detailruangan()
    {
        return $this->belongsTo(detailruangan::class);
    }
}

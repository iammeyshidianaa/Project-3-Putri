<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databarang extends Model
{
    protected $table = 'databarangs';
    protected $guarded = [];


    public function kategori()
    {
        return $this->hasMany(databarang::class);
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ID_Barang extends Model
{
    protected $table = 'baranghabis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_barang1' ,
        ];

        public function barangmasuk()
        {
            return $this->hasMany(barangmasuk::class);
        }

}

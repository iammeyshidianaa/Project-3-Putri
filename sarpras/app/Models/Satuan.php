<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = 'satuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'satuan' ,
        ];

            // public function satuan()
    // {
    //     return $this->belongsTo(databarang::class);
    // }

    // public function satuan1()
    // {
    //     return $this->belongsTo(Baranghabis::class);
    // }

    public function databarang()
        {
            return $this->hasMany(databarang::class);
        }

    public function satuan1()
        {
            return $this->belongsTo(Baranghabis::class);
        }
}

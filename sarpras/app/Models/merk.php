<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    protected $table = 'merks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'merkk' ,
        ];


    public function databarang()
    {
        return $this->hasMany(databarang::class);
    }

    public function merek1()
    {
        return $this->belongsTo(Baranghabis::class);
    }


}

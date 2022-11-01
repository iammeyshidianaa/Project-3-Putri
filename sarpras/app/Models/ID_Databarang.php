<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ID_Databarang extends Model
{
    protected $table = 'barangmasuks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_databarang' ,
        ];


    public function id_databarang()
    {
        return $this->hasMany(ID_Databarang::class);
    }

    // public function merek1()
    // {
    //     return $this->belongsTo(ID_Databarang::class);
    // }


}

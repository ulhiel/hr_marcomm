<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    
    protected $fillable = [
        'acara_nama','prioritas_id','tanggal_waktu','tempat_acara','jumlah_personil'
    ];

    protected $dates = ['tanggal_waktu'];

}

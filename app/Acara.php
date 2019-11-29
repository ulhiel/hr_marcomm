<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    
    protected $fillable = [
        'acara_nama','prioritas_id','tanggal','waktu','tempat_acara','jumlah_personil'
    ];

}

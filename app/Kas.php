<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $fillable = [
        'nominal',
        'keterangan',
        'tanggal',
        'id_nota',
        'id_rekening',
        'id_pengguna',
        'tipe'
    ];

}

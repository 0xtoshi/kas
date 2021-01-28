<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notanes';
    protected $fillable = [
        'nama_gambar',
        'diskripsi',
        'lokasi_gambar'
    ];
}

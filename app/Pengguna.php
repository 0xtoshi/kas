<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'username',
        'password',
        'role',
        'nama'
    ];
}

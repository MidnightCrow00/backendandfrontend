<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Virag extends Model
{
    protected $table = 'viragok';

    protected $fillable=[
        'nev',
        'leiras',
        'ar'
    ];
}

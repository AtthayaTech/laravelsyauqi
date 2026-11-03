<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio_1130';

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'ringkasan',
        'pendidikan',
        'pengalaman',
        'keahlian',
    ];
}

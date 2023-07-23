<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        // yang harus diisi
        'name',
        // 'email',
        'phone',
        'speciality',
        'room',
        'image',
        // 'address',
        // 'password',
    ];
}

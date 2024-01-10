<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name',
            'email',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'status',
    ];
    
}

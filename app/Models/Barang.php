<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function paketdetail()
    {
        return $this->hasMany(Paketdetail::class, 'barang_id', 'id');
    }
}

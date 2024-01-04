<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paketdetail extends Model
{
    use HasFactory;

    protected $fillable=['paket_id','barang_id'];

    
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
    
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }

}

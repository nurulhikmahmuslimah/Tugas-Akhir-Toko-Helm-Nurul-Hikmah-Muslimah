<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databarangs extends Model
{
    use HasFactory;
    Protected $guarded = ['nama_barang, jenis, harga_jual, harga_beli, stok'];

    public function suppliers()
    {
        return $this->belongsTo('App\Models\suppliers');
    }
}

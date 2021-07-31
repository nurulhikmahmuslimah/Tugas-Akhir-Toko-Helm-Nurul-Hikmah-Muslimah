<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    Protected $guarded = ['tanggal', 'user', 'nama_barang', 'jenis', 'total' ];

    public function suppliers()
    {
        return $this->belongsTo('App\Models\Suppliers');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    use HasFactory;
    Protected $guarded = ['nama', 'alamat', 'no_tlp'];
    
    public function databarangs()
    {
        return $this->hasmany('App\Models\databarangs');
    }
    public function addmember($id)
    {
        $supplier= Suppliers::where('id', $id)->first();
        return view ('suppliers.addmember', ['supplier' => $supplier]);
    }
}


<?php

namespace App\Http\Controllers;
use App\Models\databarangs;
use Illuminate\Http\Request;

class cobaController extends Controller
{
    
    public function index()
    {
        $databarangs = Databarangs::orderBy('id', 'desc')->paginate(3);
        return view('databarangs.index', compact('databarangs'));
    }

    public function create()
    { 
        return view('databarangs.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'nama_barang' => 'required',
            'jenis' =>'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
        ]);
        $databarangs = new databarangs;
        
        $databarangs->nama_barang = $request->nama_barang;
        $databarangs->jenis = $request->jenis;
        $databarangs->harga_jual = $request->harga_jual;
        $databarangs->harga_beli = $request->harga_beli;
        $databarangs->stok = $request->stok;

        $databarangs->save();

        return redirect('/');
    }
    public function show($id)
    {
        $databarangs= Databarangs::where('id', $id)->first();
        return view ('databarangs.show', ['databarang' => $databarangs]);
    }

    public function edit($id)
    {
        $databarangs= Databarangs::where('id', $id)->first();
        return view ('databarangs.edit', ['databarang' => $databarangs]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis' =>'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
        ]);
        Databarangs::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Databarangs::find($id)->delete();
        return redirect ('/');
    }
}


<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\databarangs;
use Illuminate\Http\Request;

class databarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databarangs = Databarangs::all();

        return response()->json([
            'success'   => true,
            'message'   => 'Data Databarangs',
            'data'      => $databarang
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis' =>'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
        ]);

        $databarang = Databarang::create([
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
        ]);

        if($databarang){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil',
                'data'      => $databarang
            ], 200);
            
        } else {
            return response()->json([
                'success'   => false,
                'message'   => 'Gagal',
                'data'      => $databarang
            ], 409);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $databarang = Databarangs::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail databarangsi',
            'data' => $databarang
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis' =>'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
        ]);

        $databarang = Databarangs::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = $databarang::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data' => $cek
        ], 200);
    }
}

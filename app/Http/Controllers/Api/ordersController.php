<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();

        return response()->json([
            'success'   => true,
            'message'   => 'Data order',
            'data'      => $order
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
            'tanggal' => 'required',
            'user' =>'required',
            'nama_barang' => 'required',
            'jenis' => 'required',
            'total' => 'required|numeric',
        ]);

        $order = order::create([
            'tanggal' => $request->tanggal,
            'user' => $request->user,
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'total' => $request->total,
        ]);

        if($order){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil',
                'data'      => $order
            ], 200);
            
        } else {
            return response()->json([
                'success'   => false,
                'message'   => 'Gagal',
                'data'      => $order
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
        $order = orders::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail order',
            'data' => $order
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
            'tanggal' => 'required',
            'user' =>'required',
            'nama_barang' => 'required',
            'jenis' => 'required',
            'total' => 'required|numeric',
        ]);

        $order = orders::find($id)->update([
            'tanggal' => $request->tanggal,
            'user' => $request->user,
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'total' => $request->total,
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
        $cek = $order::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data' => $cek
        ], 200);
    }
}

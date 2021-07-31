<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\suppliers;
use Illuminate\Http\Request;

class suppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = suppliers::all();

        return response()->json([
            'success'   => true,
            'message'   => 'Data suppliersi',
            'data'      => $supplier
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
            'nama' => 'required|unique:suppliers|max:255',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);

        $supplier = supplier::create([
            'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_tlp' => $request->no_tlp
        ]);

        if($supplier){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil',
                'data'      => $supplier
            ], 200);
            
        } else {
            return response()->json([
                'success'   => false,
                'message'   => 'Gagal',
                'data'      => $supplier
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
        $supplier = suppliers::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail suppliersi',
            'data' => $supplier
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
            'nama' => 'required|unique:suppliers|max:255',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);

        $supplier = suppliers::find($id)->update([
            'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_tlp' => $request->no_tlp
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
        $cek = $supplier::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Post Updated',
            'data' => $cek
        ], 200);
    }
}

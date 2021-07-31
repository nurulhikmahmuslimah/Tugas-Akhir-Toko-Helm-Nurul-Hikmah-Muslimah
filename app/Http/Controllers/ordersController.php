<?php

namespace App\Http\Controllers;
use App\Models\orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    
    public function index()
    {
        $orders = Orders::orderBy('id', 'desc')->paginate(3);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        
        return view('orders.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'tanggal' => 'required',
            'user' =>'required',
            'nama_barang' => 'required',
            'jenis' => 'required',
            'total' => 'required|numeric',
        ]);
        $orders = new orders;
        
        $orders->tanggal = $request->tanggal;
        $orders->user = $request->user;
        $orders->nama_barang = $request->nama_barang;
        $orders->jenis = $request->jenis;
        $orders->total = $request->total;

        $orders->save();

        return redirect('/');
    }
    public function show($id)
    {
        $orders= Orders::where('id', $id)->first();
        return view ('orders.show', ['order' => $orders]);
    }

    public function edit($id)
    {
        $orders= Orders::where('id', $id)->first();
        return view ('orders.edit', ['order' => $orders]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'user' =>'required',
            'nama_barang' => 'required',
            'jenis' => 'required',
            'total' => 'required|numeric',
        ]);
        Orders::find($id)->update([
            'tanggal' => $request->tanggal,
            'user' => $request->user,
            'nama_barang' => $request->nama_barang,
            'jenis' => $request->jenis,
            'total' => $request->total,
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Orders::find($id)->delete();
        return redirect ('/');
    }
}


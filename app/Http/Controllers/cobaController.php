<?php

namespace App\Http\Controllers;

use App\Models\folders;
use Illuminate\Http\Request;

class Cobacontroller extends Controller
{
    
    public function index()
    {
        
        $folders = Folders::orderBy('id', 'desc')->paginate(3);
        return view('folders.index', compact('folders'));
    }

    public function create()
    {
        
        return view('folders.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'Desain_Ruangan' => 'required|unique:folders|max:255',
            'Tema_Ruangan' =>'required|numeric',
            'Harga' => 'required',
        ]);
        $folders = new Folders;
        
        $folders->Desain_Ruangan = $request->Desain_Ruangan;
        $folders->Tema_Ruangan = $request->Tema_Ruangan;
        $folders->Harga = $request->Harga;

        $folders->save();

        return redirect('/');
    }
    public function show($id)
    {
        $folders= Folders::where('id', $id)->first();
        return view ('folders.show', ['folder' => $folders]);
    }

    public function edit($id)
    {
        $folders= Folders::where('id', $id)->first();
        return view ('folders.edit', ['folder' => $folders]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Desain_Ruangan' => 'required|unique:folders|max:255',
            'Tema_Ruangan' =>'required|numeric',
            'Harga' => 'required',
        ]);
        Friends::find($id)->update([
            'Desain_Ruangan' => $request->Desain_Ruangan,
            'Tema_Ruangan' => $request->Tema_Ruangan,
            'Harga' => $request->Harga,
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Folders::find($id)->delete();
        return redirect ('/');
    }
}


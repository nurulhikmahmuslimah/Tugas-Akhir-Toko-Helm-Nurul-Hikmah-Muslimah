<?php

namespace App\Http\Controllers;
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
        $suppliers = Suppliers::orderBy('id','desc')->paginate(3);
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
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

        $suppliers = new suppliers;

        $suppliers->nama = $request->nama;
        $suppliers->alamat = $request->alamat;
        $suppliers->no_tlp = $request->no_tlp;
       
        $suppliers->save();
        return redirect('/suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Suppliers::where('id', $id)->first();
        return view('suppliers.show' ,['supplier' => $supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Suppliers::where('id', $id)->first();
        return view('suppliers.edit' , ['supplier' => $supplier]);
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
            Suppliers::find($id)->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_tlp' => $request->no_tlp
            ]);
            
            return redirect('/suppliers');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suppliers::find($id)->delete();
        return redirect('/suppliers');
    }
    public function addmember($id)
    {
        $databarang = databarangs::where('suppliers_id', '=', 0)->get(); 
        $supplier = Suppliers::where('id', $id)->first();
        return view('suppliers.addmember' ,['supplier' => $supplier, 'databarang' => $databarang]);
    }
    public function updateaddmember(Request $request, $id)
    {
        $databarang = databarangs::where('id', $request->databarang_id)->first(); 
        databarangs::find($databarang->id)->update([
                'suppliers_id' => $id
               
            ]);
            
            return redirect('/suppliers/addmember/' . $id);
        }
        public function deleteaddmember(Request $request, $id)
        {
            //dd($id);
            databarangs::find($id)->update([
                    'suppliers_id' => $id
                   
                ]);
                
                return redirect('/suppliers');
            }
}

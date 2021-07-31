@extends('layouts.app')

@section('title','suppliers')

@section('content')
<form action="/suppliers/addmember/{{$supplier->id}}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Toko Helm</label>
      <select class="form-select" aria-label="Default select example" name="folder_id">
      <option selected>Pilih Data Untuk Dimasukan Ke Dalam Suppliers</option>
      @foreach ($databarang as $d)
   <option value="{{$d->id}}">{{$d->nama_barang}}</option>
   @endforeach
  </select> 
 </div>
  
  <button type="submit" class="btn btn-primary">Tambah ke Supplier</button>
</form> 

@endsection
  


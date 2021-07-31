@extends('layouts.app')

@section('title', 'databarangs')

@section('content')
<form action="/databarangs/{{ $databarang['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">nama_barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_barang" aria-describedby="emailHelp" value="{{ old('nama_barang') ? old('nama_barang') : $databarang['nama_barang'] }}">
    @error('nama_barang')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jenis</label>
    <input type="text" class="form-control" name="jenis" id="exampleInputPassword1" value="{{ old('jenis') ? old('jenis') : $databarang['jenis'] }}">
    @error('jenis')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga_jual</label>
    <input type="text" class="form-control" name="harga_jual" id="exampleInputPassword1" value="{{ old('harga_jual') ? old('harga_jual') : $databarang['harga_jual'] }}">
    @error('harga_jual')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga_beli</label>
    <input type="text" class="form-control" name="harga_beli" id="exampleInputPassword1" value="{{ old('harga_beli') ? old('harga_beli') : $databarang['harga_beli'] }}">
    @error('harga_beli')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">stok</label>
    <input type="text" class="form-control" name="stok" id="exampleInputPassword1" value="{{ old('stok') ? old('stok') : $databarang['stok'] }}">
    @error('stok')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Input</button>
</form>



   
@endsection

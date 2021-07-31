@extends('layouts.app')

@section('title', 'Databarangs')

@section('content')


<form action="/databarangs" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">nama_barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="nama_barang" aria-describedby="emailHelp" value="{{old('nama_barang')}}">
    @error('nama_barang')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jenis</label>
    <input type="text" class="form-control" name="jenis" id="exampleInputPassword1" value="{{old('jenis')}}">
    @error('jenis')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga_jual</label>
    <input type="text" class="form-control" name="harga_jual" id="exampleInputPassword1"value="{{old('harga_jual')}}">
    @error('harga_jual')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga_beli</label>
    <input type="text" class="form-control" name="harga_beli" id="exampleInputPassword1"value="{{old('harga_beli')}}">
    @error('harga_beli')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">stok</label>
    <input type="text" class="form-control" name="stok" id="exampleInputPassword1"value="{{old('stok')}}">
    @error('stok')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  
  <td><div align="right"><button type="submit" class="btn btn-primary">Input</div></button></td>
</form>
   
@endsection
@extends('layouts.app')

@section('title', 'orders')

@section('content')
<form action="/orders/{{ $order['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">tanggal</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="tanggal" aria-describedby="emailHelp" value="{{ old('tanggal') ? old('tanggal') : $order['tanggal'] }}">
    @error('tanggal')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">user</label>
    <input type="text" class="form-control" name="user" id="exampleInputPassword1" value="{{ old('user') ? old('user') : $order['user'] }}">
    @error('user')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">nama_barang</label>
    <input type="text" class="form-control" name="nama_barang" id="exampleInputPassword1" value="{{ old('nama_barang') ? old('nama_barang') : $order['nama_barang'] }}">
    @error('nama_barang')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">jenis</label>
    <input type="text" class="form-control" name="jenis" id="exampleInputPassword1" value="{{ old('jenis') ? old('jenis') : $order['jenis'] }}">
    @error('jenis')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">total</label>
    <input type="text" class="form-control" name="total" id="exampleInputPassword1" value="{{ old('total') ? old('total') : $order['total'] }}">
    @error('total')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Input</button>
</form>



   
@endsection

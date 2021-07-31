@extends('layouts.app')

@section('title','suppliers')

@section('content')
<form action="/suppliers" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{old('nama')}}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{old('alamat')}}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">no_tlp</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{old('no_tlp')}}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <td><div align="right"><button type="submit" class="btn btn-primary">Input</div></button></td>
</form> 

@endsection
  


@extends('layouts.app')

@section('title','suppliers')

@section('content')
<form action="/suppliers/{{$supplier['id']}}" method="POST">
@csrf
@method('PUT')
  <div class="form-supplier">
    <label for="exampleInputEmail1">nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" numfmt_parse_currency="nama" aria-describedby="emailHelp"  
    value="{{old('nama')? old('nama'):$supplier['nama']}}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-supplier">
    <label for="exampleInputPassword1">alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1"
    value="{{old('alamat')? old('alamat'):$supplier['alamat']}}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-supplier">
    <label for="exampleInputPassword1">no_tlp</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1"
    value="{{old('no_tlp')? old('no_tlp'):$supplier['no_tlp']}}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Input</button>
</form> 

@endsection
  


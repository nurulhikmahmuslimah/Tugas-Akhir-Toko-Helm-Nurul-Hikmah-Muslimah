@extends('layouts.app')

@section('title', 'folders')

@section('content')
<form action="/folders/{{ $folder['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Desain_Ruangan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Desain_Ruangan" aria-describedby="emailHelp" value="{{ old('Desain_Ruangan') ? old('Desain_Ruangan') : $folder['Desain_Ruangan'] }}">
    @error('Desain_Interior')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tema_Ruangan</label>
    <input type="text" class="form-control" name="Tema_Ruangan" id="exampleInputPassword1" value="{{ old('Tema_Ruangan') ? old('Tema_Ruangan') : $folder['Tema_Ruangan'] }}">
    @error('Tema_Ruangan')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="Harga" id="exampleInputPassword1" value="{{ old('Harga') ? old('Harga') : $folder['Harga'] }}">
    @error('Harga')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection

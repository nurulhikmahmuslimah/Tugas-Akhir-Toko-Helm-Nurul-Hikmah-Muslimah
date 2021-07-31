@extends('layouts.app')

@section('title', 'databarangs')

@section('content')
<a href="/databarangs/create" class="card-link btn-primary">Tambah Data Barang</a>
@foreach($databarangs as $databarang)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/databarangs/{{$databarang['Id']}}" class="card-title"> {{$databarang['nama_barang']}}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{$databarang['jenis']}}</h6>
    <p class="card-text">{{$databarang['harga_jual']}}</p>
    <p class="card-text">{{$databarang['harga_beli']}}</p>
    <p class="card-text">{{$databarang['stok']}}</p>

<form action="/databarangs/{{$databarang['id']}}" method="POST">
@csrf
@method ('DELETE')
<a href="/databarangs/{{$databarang['id']}}/Edit" class="card-link btn-warning">Edit Barang</a>
    <button class="card-link btn-danger">Delete Barang</a>
 </form>
  </div>
</div>


@endforeach
<div>
    {{$databarangs->links()}}
</div>
@endsection
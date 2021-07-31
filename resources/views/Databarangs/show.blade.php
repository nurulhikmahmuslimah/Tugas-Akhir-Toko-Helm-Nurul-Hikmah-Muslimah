@extends('layouts.app')

@section('title', 'Toko Helm')

@section ('content')
<div class="card">
    <div class="card-body">
        <h3>Nama_Barang : {{ $databarang['Nama_Barang'] }}</h3>
        <h3>Jenis : {{ $databarang['Jenis'] }}</h3>
        <h3>Harga_Jual : {{ $databarang['Harga_Jual'] }}</h3>
        <h3>Harga_Beli : {{ $databarang['Harga_Beli'] }}</h3>
        <h3>Stok : {{ $databarang['Stok'] }}</h3>
    </div>
</div>
@endsection
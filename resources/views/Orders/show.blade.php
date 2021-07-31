@extends('layouts.app')

@section('title', 'orders')

@section ('content')
<div class="card">
    <div class="card-body">
        <h3>Tanggal : {{ $order['tanggal'] }}</h3>
        <h3>User : {{ $order['user'] }}</h3>
        <h3>Nama_-Barang : {{ $order['nama_barang'] }}</h3>
        <h3>Jenis : {{ $order['jenis'] }}</h3>
        <h3>Total : {{ $order['total'] }}</h3>
    </div>
</div>
@endsection
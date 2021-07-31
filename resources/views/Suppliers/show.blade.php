@extends('layouts.app')

@section('title', 'toko helm')

@section ('content')
<div class="card">
    <div class="card-body">
        <h3>Nama : {{ $supplier['Desain_Ruangan'] }}</h3>
        <h3>Alamat : {{ $supplier['Alamat'] }}</h3>
        <h3>No_tlp : {{ $supplier['No_tlp'] }}</h3>
    </div>
</div>
@endsection
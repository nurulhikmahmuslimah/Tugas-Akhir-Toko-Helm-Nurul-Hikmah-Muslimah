@extends('layouts.app')

@section('title', 'Desain Interior')

@section ('content')
<div class="card">
    <div class="card-body">
        <h3>Desain_Interior : {{ $folder['Desain_Ruangan'] }}</h3>
        <h3>Tema_Ruangan : {{ $folder['Tema_Ruangan'] }}</h3>
        <h3>Harga : {{ $folder['Harga'] }}</h3>
    </div>
</div>
@endsection
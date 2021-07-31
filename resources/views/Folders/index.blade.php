@extends('layouts.app')

@section('title', 'folders')

@section('content')

@foreach($folders as $folder)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/folders/{{$folder['Id']}}" class="card-title"> {{$folder['Desain_Ruangan']}}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{$folder['Tema_Ruangan']}}</h6>
    <p class="card-text">{{$folder['Harga']}}</p>

  <a href="/folders/{{$folder['id']}}/Edit" class="card-link btn-warning">Edit Tema</a>
<form action="/folders/{{$folder['id']}}" method="POST">
@csrf
@method ('DELETE')
    <button class="card-link btn-danger">Delete Tema</a>
 </form>
  </div>
</div>


@endforeach
<div>
    {{$folders->links()}}
</div>
@endsection
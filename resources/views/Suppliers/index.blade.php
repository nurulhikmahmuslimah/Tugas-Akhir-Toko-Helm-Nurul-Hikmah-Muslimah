@extends('layouts.app')

@section('title','suppliers')

@section('content')
<a href="/suppliers/create" class="card-link btn-primary">Isi Data Supplier</a>
@foreach ($suppliers as $supplier)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/suppliers/{{$supplier['id']}}"class="card-title">{{ $supplier['nama'] }}</a>
    <p class="card-text">{{ $supplier['alamat'] }}.</p>
    <p class="card-text">{{ $supplier['no_tlp'] }}.</p>
   <hr>
           @foreach($supplier->databarangs as $databarang)
          
              <li class="list-supplier-item d-flex justify-content-between align-items-center">
              {{$databarang->databarang}}
              <form action="/suppliers/deleteaddmember/{{$databarang->id}}"method="POST">
              @csrf
              @method('PUT')
              <button type="submit" class= "bedge card-link btn-danger">x</button>
              </form>
          </li>

            @endforeach
   <hr>
    <form action="/suppliers/{{$supplier['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <a href="/suppliers/{{$supplier['id']}}/edit" class="card-link btn-warning">Edit Data</a>
    <button class="card-link btn-danger">Delete</button>
    </form>
  </div>
</div>
   
@endforeach
{{$suppliers->links()}}
@endsection
  


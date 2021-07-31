@extends('layouts.app')

@section('title', 'orders')

@section('content')
<a href="/orders/create" class="card-link btn-primary">Data Order</a>
@foreach($orders as $order)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/orders/{{$order['Id']}}" class="card-title"> {{$order['tanggal']}}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{$order['user']}}</h6>
    <p class="card-text">{{$order['nama_barang']}}</p>
    <p class="card-text">{{$order['jenis']}}</p>
    <p class="card-text">{{$order['total']}}</p>

<form action="/orders/{{$order['id']}}" method="POST">
@csrf
@method ('DELETE')
    <button class="card-link btn-danger">Delete Barang</a>
 </form>
  </div>
</div>


@endforeach
<div>
    {{$orders->links()}}
</div>
@endsection
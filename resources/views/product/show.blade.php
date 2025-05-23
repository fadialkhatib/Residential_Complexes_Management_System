@extends('product.layout')

@section('contant')

  <div class="card p-2" style="width: 100%;max-height: 100vh;">
    <div class="d-flex align-item-center justify-content-center">
    <img class="card-img-top" src="/images/{{$product->image}}" style="max-height: 80vh;width: 75%;border:1px;border-radius: 10px" alt="Card image">
    </div>
    <div class="card-body text-center">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->detailes}}</p>
    </div>
  </div>
  <div class="text-center">
    <a href="{{route('product.index')}}" class="btn btn-outline-primary mt-3 mb-3">Go To Home Page</a>
  </div>

@endsection
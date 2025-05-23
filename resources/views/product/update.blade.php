@extends('product.layout')

@section('contant')


  <div class="col align-self-start p-3">
    <a href="{{route('product.index')}}" class="btn btn-outline-primary">All Products</a>
  </div>
  <form action="{{route('product.update',$product->id)}}" method="post" class="mt-5" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea2" class="form-label">Details</label>
    <textarea name="detailes" class="form-control" id="exampleFormControlTextarea2">{{$product->detailes}}</textarea>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label">Image</label>
      <input type="file" name="image" class="form-control" id="exampleFormControlInput3">
      </div>
    <div class="d-flex align-items-center justify-content-center">
    <button type="submit" class="btn btn-outline-primary">Create</button>
    </div>
  </form>
@endsection
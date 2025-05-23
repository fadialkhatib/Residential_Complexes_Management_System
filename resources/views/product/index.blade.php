@extends('product.layout')

@section('contant')

  <div class="row">
    {{-- alert --}}
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-5" role="alert">
    {{$message}}
    </div>
    @endif
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-hover table-borderless">
    <thead>
      <tr class="text-center">
      <th>ID</th>
      <th>Name</th>
      <th>Detailes</th>
      <th>Image</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach($products as $item)
      <tr class="text-center" style="height: 200px">
      <td class="align-middle">{{$item->id}}</td>
      <td class="align-middle">{{$item->name}}</td>
      <td class="align-middle">{{$item->detailes}}</td>
      <td class="align-middle"><img src="/images/{{$item->image}}" height="150px" alt="no found"></td>
      <td class="d-flex justify-content-around align-items-center" style="height: 200px">
      <form action="{{route('product.destroy', $item->id)}}" method="post">
      @csrf 
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
      </form>
      <a href="{{route('product.edit', $item->id)}}" class="btn btn-outline-primary">Edit</a>
      <a href="{{route('product.show', $item->id)}}" class="btn btn-outline-info">Show</a>
      </td>
      </tr>
    @endforeach

    </tbody>
    </table>
  </div>
  {!! $products->links() !!}
@endsection
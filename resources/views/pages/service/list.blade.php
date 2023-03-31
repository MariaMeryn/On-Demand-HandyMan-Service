@extends('partials.master')
@section('content')





    <h1>Service</h1>
    <a href="{{route('service.form')}}" class="btn btn-dark my-2 ">  Add New  </a>

    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Cat_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
 

  <tbody>
  @foreach($sers as $ser) 
    <tr>
      <th scope="row">{{$ser->id}}</th>
      <td>{{$ser->cat_id}}</td>
      <td>{{$ser->name}}</td>
      <td>{{$ser->image}}</td>
      <td>{{$ser->status}}</td>
      <td>{{$ser->description}}</td>
      <td>
      <button class="btn btn-info">View</button>
      <button class="btn btn-danger">Delete</button>
</td>
    </tr>

    @endforeach
  </tbody>


</table>

@endsection
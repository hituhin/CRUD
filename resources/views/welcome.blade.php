@extends('layouts.crud')

@if(Session::has('status'))
<p class="alert alert-info">{{ Session::get('status') }}</p>
@endif

@section('content')
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $students as $student)
    <tr>
     <td>{{ $student->id }}</td>
     <td>{{ $student->first_Name }}</td>
     <td>{{ $student->last_Name }}</td>
     <td>{{ $student->email }}</td>
     <td>{{ $student->phone }}</td>
     <td class="text-center">
      <a class="btn btn-raised btn-primary btn-sm" href="{{Route('edit',$student->id)}}" >
         <i class="fa fa-pencil-square" aria-hidden="true"></i>
         </a>

            ||
            <form method="POST" id="delete-form-{{$student->id}}" action="{{ route('delete',$student->id) }}" style="display: none">
            {{ csrf_field()}}
            {{ method_field('delete')}}
            
            </form>

      <button onclick="if(confirm('Are you sure, You want to delete this?')){
        event.preventDefault();
        document.getElementById('delete-form-{{$student->id}}').submit();
      }else{
        event.preventDefault();
      }" class="btn btn-raised btn-danger btn-sm" href="#">
         <i class="fa fa-trash" aria-hidden="true"></i>
         </button>
         </td>
       

    @endforeach
    </tr>
  </tbody>
</table>

@endsection
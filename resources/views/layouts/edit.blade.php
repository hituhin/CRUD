@extends('layouts.crud')

@section('panel')
   <div class="container">
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="panel panel-default">
          <div class="panel-heading">
          <h3 class="panel-title"> Edit Student's Infornation:</h3>
          </div>

          <div class="panel-body">
          <form action="{{route('update',$student->id)}}" method="post">
          @csrf
          @method('put')
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
         <input type="text" id="form3Example1" class="form-control" name="first_Name" value="{{$student->first_Name}}" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" name="last_Name" value="{{$student->last_Name}}" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" name="email"  value="{{$student->email}}" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
        <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" name="password" value="{{$student->password}}" />
              <label class="form-label" for="form3Example4">Password</label>
        </div>

       <div class="form-outline mb-4">
            <input type="text" id="form3Example4" class="form-control" name="phone" value="{{$student->phone}}"  />
            <label class="form-label" for="form3Example4">Phone Number</label>
        </div>

       <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>

      </form>
          </div>
            
      </div>
   
   </div>
@endsection
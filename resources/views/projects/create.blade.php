@extends('layouts.app')

@section('content')


@error('project_name')
@foreach($errors->all() as $error)
<h1 class="text-danger">{{$error}}</h1>
@endforeach
@enderror


<div class="container">
    <div class="row justify-content-center">
    <div class="card m-3 p-3 shadow text-center col-4">
   <form action="{{route('projects.store')}}" method="POST">
        @csrf
    <label for="project_name"><h3>Project Name</h3></label> <br>
    <input type="text" required name="project_name"> <br>
    <input type="submit" class="btn btn-primary m-3 p-3" value="Create Project">
    </form>
   </div>
    </div>

   
</div>
@endsection
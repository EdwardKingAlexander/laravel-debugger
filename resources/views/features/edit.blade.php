@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
    <div class="card m-3 p-3 shadow text-center col-10">
   
   
 <form action="{{route('features.store', $project->id)}}" method="post">
@csrf 

<input type="hidden" name="project_id" value="{{$project->id}}">

 <label for="feature_name">Feature:</label> <br>
 <textarea name="feature_name" id="" cols="45" rows="2">{{old('feature_name')}}</textarea> <br>

 <label for="feature_description">Description</label> <br>
 <textarea name="feature_description" id="" cols="90" rows="10">{{old('feature_description')}}</textarea> <br>

 <label for="due_date">Due Date</label><br>
 <input type="datetime-local" name="due_date" id="" value="{{old('due_date')}}"> <br>

 <input type="submit" value="Save Feature" class="btn btn-primary mt-3">

 </form>
    
 
 @include('templates.errors')
   </div>
    </div>

   
</div>
@endsection
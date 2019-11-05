@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row justify-content-center">
    <h1 class="text-center">Add a Bug to: <br> <a href="/projects/{{$project->id}}">{{$project->project_name}}</a></h1>
    <div class="card m-3 p-3 shadow text-center col-8">




   <form action="{{route('bugs.store', $project->id)}}" method="POST">
        @csrf
        
        <input type="hidden" name="project_id" value="{{$project->id}}">

        <!-- Bug Description--->
        <div class="form-group">
            <label for="bug"><h3>Bug Description</h3></label> <br>
            <textarea required name="bug" id="bug" cols="60" rows="10">{{old('value')}}</textarea>
        </div>

        <!----SOlution--->
        <div class="form-group">
        <label for="solution"><h3>Solution</h3></label><br>
        <textarea name="solution" id="" cols="60" rows="10">{{old('value')}}</textarea> 
        </div>

        <!---Notes-->
        <div class="form-group">
        <label for="notes"><h3>Notes</h3></label> <br>
        <textarea name="notes" id="" cols="60" rows="10">{{old('value')}}</textarea> <br>
        </div>


    <input type="submit" class="btn btn-primary m-3 p-3" value="Create Bug">
    </form>
    
    @include('templates.errors')

   </div>
    </div>

   
</div>
@endsection
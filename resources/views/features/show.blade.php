@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
    <div class="card m-3 p-3 shadow text-center col-10">
   
   <h1>{{$project->project_name}}</h1>
    <h2>Feature:</h2>
    <h4>{{$feature->feature_name}}</h4>
    <hr>
    <h4>{{$feature->feature_description}}</h4>
    <h4>Due: {{Carbon\Carbon::parse($feature->due_date)->format('m/d/Y')}}</h4>
    @if($feature->is_complete == 1) 
    <h4 class="text-success">Feature is completed</h4>
    @else
    <h4 class="text-danger">Feature is not yet completed</h4>
    @endif
    <div class="d-flex justify-content-center">
    <ul class="list-inline">
  <li class="list-inline-item btn btn-outline-primary"><a href="{{route('features.edit', ['project'=> $project->id,'feature' => $feature->id])}}">Edit Feature</a></li>
  <li class="list-inline-item btn btn-outline-danger"><a href="">Delete Feature</a></li>
</ul>
    </div>
   
   </div>
    </div>

   
</div>
@endsection
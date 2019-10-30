@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    @foreach($projects as $project)
    
        
        <div class="col-3 text-center card p-2 m-2">
    <h2><a href="/projects/{{$project->id}}">{{$project->project_name}}</a></h2>
        </div> <!----End of col div ---->

 
    @endforeach
    </div> <!--End of row div----->
</div>
@endsection
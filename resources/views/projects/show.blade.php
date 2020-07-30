@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-12 text-center card m-3 p-3">

        <h1>{{$project->project_name}}</h1>
        <br>
        <h3>Bugs: </h3>
        <hr>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Bug ID</th>
      <th scope="col">Bug Description</th>
      <th scope="col">Bug Creation Date</th>
      <th scope="col">Bug Solution</th>
      <th scope="col">Notes</th>
      <th scope="col">Completed?</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bugs as $bug)
    <tr>
      <!--Bug ID-->
      <th scope="row" id="bug-id">{{$bug->id}}</th>

      <!--Bug Description-->
      <td id="bug-bug"><a href=""></a>{{$bug->bug}}</td>

      <!--Bug Created At-->
      <td id="bug-date">{{Carbon\Carbon::parse($bug->created_at)->format('m/d/Y')}}</td>

      <!--Bug Solution-->
      @if($bug->solution)
      <td id="bug-solution">{{$bug->solution}}</td>
      
      @elseif(!$bug->solution) 
      <td class="text-danger">No current known solution</td>@endif

      <!--Bug Notes-->
      <td>{{$bug->notes}}</td>

      @if($bug->completed)
    <td class="bug-complete text-success">
      Completed
    </td>

      @elseif(!$bug->completed)
      <td class="text-danger">
        NOT COMPLETED
      </td>


      <td>
      <form method="POST" action="/projects/1/bugs/{{$bug->id}}">
          @csrf
          {{method_field('PUT')}}
          <label class="complete" for="">Mark As Complete</label>
         
      <input type="checkbox" class="toggle-completed" name="{{$project->id}}" value="{{$bug->id}}"></td>
        
        </form>

       
      @endif
      
    </tr>
    @endforeach

   
  </tbody>
</table>

        <hr>
        <a href="{{route('bugs.create', $project->id)}}" class="btn btn-primary">Add a Bug</a>
        
        <br><br>
        </div> <!-----end of col div -->


        <!---------------------End of the Bugs Table------------------->

        <!---------------------Start of the Features Table------------------->

        <div class="m-3 p-3 col-12 text-center card">

<h3>Features: </h3>
<hr>
<br>

<table class="table table-dark">
<thead>
<tr>
<th scope="col">Feature</th>
<th scope="col">Description</th>
<th scope="col">Due Date</th>
<th scope="col">Completed?</th>
</tr>
</thead>
<tbody>
@foreach($features as $feature)
<tr>
<!--Feature-->
<th scope="row"><a href="/projects/{{$project->id}}/features/{{$feature->id}}">{{$feature->feature_name}}</a></th>

<!--Feature Description-->
<td>{{$feature->feature_description}}</td>


<!--Feature Due Date-->

<td>{{Carbon\Carbon::parse($feature->due_date)->format('m/d/Y')}}</td>




@if($feature->completed)
<td class="text-success">Completed</td>

@elseif(!$feature->completed)
<td class="text-danger">NOT COMPLETED</td>
<td>
  <label for="">Mark As Complete</label>
<input type="checkbox" class="toggle-feature-completed" name="{{$project->id}}" value="{{$feature->id}}" >
</td>
@endif

</tr>
@endforeach


</tbody>
</table>


<hr>
<a class="btn btn-primary" href="{{route('features.create', $project->id)}}">Add a Feature</a>


</div> <!-----end of col div -->
    </div> <!-- end of row div--->
     
  
</div> <!---- end of container div --->
@endsection
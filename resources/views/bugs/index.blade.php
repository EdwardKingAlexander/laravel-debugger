@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">

   <div class="col-10 text-center">

<h1>All Project Bugs</h1>
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
<th scope="row">{{$bug->id}}</th>

<!--Bug Description-->
<td>{{$bug->bug}}</td>

<!--Bug Created At-->
<td>{{$bug->created_at}}</td>

<!--Bug Solution-->
@if($bug->solution)
<td>{{$bug->solution}}</td>

@elseif(!$bug->solution) 
<td class="text-danger">No current known solution</td>@endif

<!--Bug Notes-->
<td>{{$bug->notes}}</td>
@if($bug->completed)<td class="text-success">Completed</td>@elseif(!$bug->completed)<td class="text-danger">NOT COMPLETED</td>
<td><label for="">Mark As Complete</label>
<input type="checkbox" name="" id=""></td>
@endif

</tr>
@endforeach


</tbody>
</table>


<hr>
<a href="{{url('/bugs/create')}}" class="btn btn-primary">Add A Bug</a>
</div> <!-----end of col div -->
</div> <!-- end of row div--->
   
   </div> <!-- End of Row div--->
</div> <!---End of container div----->
@endsection
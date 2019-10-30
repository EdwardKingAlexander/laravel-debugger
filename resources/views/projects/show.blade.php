@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 text-center">

        <h1>{{$project->project_name}}</h1>
        <hr>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Bug ID</th>
      <th scope="col">Bug Description</th>
      <th scope="col">Bug Creattion Date</th>
      <th scope="col">Bug Solution</th>
      <th scope="col">Notes</th>
      <th scope="col">Completed?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>When I submit form on create project link, I have an error stating that there are sql binding issues</td>
      <td>11/10/2019</td>
      <td>I needed to remove the semicolon from the unique validation rule in the projects controller and add a colon with the table to reference the column value from</td>
      <td>@mdo</td>
      <td>No</td>
    </tr>

   
  </tbody>
</table>

        <hr>
    <h1>Probably use a table for this</h1>
    <p> | Is bug fixed?/ Date | Solution to bug | Notes | Bug Created</p>
        </div> <!-----end of col div -->
    </div> <!-- end of row div--->
  
</div> <!---- end of container div --->
@endsection
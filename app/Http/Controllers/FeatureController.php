<?php

namespace App\Http\Controllers;

use App\Project;
use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('features.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('features.create')->with('project', $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

        Feature::create($this->validateProject());

        return redirect('/projects/'. $request->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Feature $feature)
    {
        return view('features.show')
        ->with('project', $project)
        ->with('feature', $feature);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Feature $feature)
    {
        return view('features.edit')
        ->with('project', $project)
        ->with('feature', $feature);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $feature = Feature::findOrFail($request->id);
       if($feature->completed) {
        $feature->completed = $request->completed;
       } else {
           $feature->completed = 0;
       }
       $feature->feature_description = $request->feature_description;
        $feature->save();    
        
        return redirect("/projects/$feature->project_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($project, $feature)
    {
        $feature = Feature::find($feature);
        $feature->delete();


        return redirect('/projects/' . $feature->project_id);
    }

    
    protected function validateProject()
    {
        return request()->validate([
            'project_id' => 'required',
            'feature_name'=> 'required|min:6',
            'feature_description' => 'required|min:6',
            'due_date'=> 'date'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureApiController extends Controller
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $feature = Feature::findOrFail($request->id);
         $feature->completed = $request->completed;
         $feature->save();    
    }

}

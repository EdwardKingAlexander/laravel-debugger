<?php

namespace App\Http\Controllers;

use App\Bug;
use Illuminate\Http\Request;

class BugApiController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $bug = Bug::findOrFail($request->id);
         $bug->completed = $request->completed;
         $bug->save();    
    }
}

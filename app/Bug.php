<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{

     /**
     * 
     *  Protected Fillable properties
     * 
     */

    protected $guarded = [];

    protected $dates = ['updated_at'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

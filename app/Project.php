<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{

    /**
     * 
     *  Protected Fillable properties
     * 
     */

     protected $fillable = ['project_name'];

     protected $dates = ['created_at'];



    // public function getRouteKeyName()
    // {
    //     return 'project_name';
    // }

    public function bugs()
    {
        return $this->hasMany('App\Bug');
    }

    public function features()
    {
        return $this->hasMany('App\Feature');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

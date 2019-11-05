<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
     /**
     * 
     *  Protected Fillable properties
     * 
     */

    protected $guarded = [];
    protected $casts = [
        'due_date' => 'timestamp',
    ];

    // protected $dates = ['due_date'];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

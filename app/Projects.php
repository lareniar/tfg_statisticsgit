<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name', 'costs', 'costs_limit', 'date_start','date_end', 'description'
    ];

}

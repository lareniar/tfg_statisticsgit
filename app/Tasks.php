<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_owner', 'project_name', 'task_owner', 'priority','description','time_used', 'date_start','date_end','user_id', 'project_id'
    ];
}

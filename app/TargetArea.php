<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetArea extends Model
{
    protected $table = 'target_areas'; 
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'area'
    ];
}

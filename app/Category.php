<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function activities(){
        return $this->belongsToMany('App\Activity', 'Activity_category', 'id_category', 'id_activity');
    }
}

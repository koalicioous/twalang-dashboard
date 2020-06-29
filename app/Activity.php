<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name','id_user','price','place','description','image'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsToMany('App\Categories','Activity_category', 'id_activity', 'id_category');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}

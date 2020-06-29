<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['id_activity','id_user','guest_amount','time_stamp','booking_date','gross_total','status'];

    protected $dates = ['booking_date'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function activity(){
        return $this->belongsTo('App\Activity');
    }
}

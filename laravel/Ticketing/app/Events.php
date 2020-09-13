<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'name', 'description', 'stauts', 'location'
    ];

    public function tickets() {
    	return $this->hasMany('App\tickets');
    }
}

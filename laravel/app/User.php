<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function detail()
    {
    	return $this->hasOne('App\Detail');
    }
}

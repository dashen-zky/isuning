<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function good()
    {
    	return $this->belongsTo("App\Good");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	 public function profile()
    {
        return $this->belongsToMany('App\Models\Profile');
    }

}
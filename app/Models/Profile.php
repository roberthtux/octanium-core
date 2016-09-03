<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	public function option()
    {
        return $this->belongsToMany('App\Models\Option');
    }
    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement_type extends Model
{
   
   public function store_movement()
    {
        return $this->HasMany('App\Models\Store_movement');
    } 
}

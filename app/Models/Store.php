<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function dispensary()
    {
        return $this->HasMany('App\Models\Dispensary');
    }

    public function store_movement()
    {
        return $this->HasMany('App\Models\Store_movement');
    }
}

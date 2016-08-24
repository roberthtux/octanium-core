<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store_movement extends Model
{
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }

    public function store()
    {
        return $this->BelongsTo('App\Models\Store');
    }

    public function movement_type()
    {
        return $this->BelongsTo('App\Models\Movement_type');
    }
}

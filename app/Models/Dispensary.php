<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispensary extends Model
{
    public function store()
    {
        return $this->BelongsTo('App\Models\Store');
    }

    public function hose()
    {
        return $this->HasMany('App\Models\Hose');
    }
}

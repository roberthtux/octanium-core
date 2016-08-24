<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function hose()
    {
        return $this->HasMany('App\Models\Hose');
    }
    public function tax()
    {
        return $this->belongsToMany('App\Models\Tax');
    }
    public function mark()
    {
        return $this->BelongsTo('App\Models\Mark');
    }
}

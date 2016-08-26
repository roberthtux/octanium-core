<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }

    public function turn()
    {
        return $this->BelongsTo('App\Models\Turn');
    }
    public function measurement()
    {
        return $this->HasMany('App\Models\Measurement');
    }
}

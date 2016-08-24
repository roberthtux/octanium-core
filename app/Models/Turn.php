<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    public function schedule()
    {
        return $this->HasMany('App\Models\Schedule');
    }
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
}

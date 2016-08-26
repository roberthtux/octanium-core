<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cash_register extends Model
{
    public function court()
    {
        return $this->HasMany('App\Models\Court');
    }
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
    public function cost_center()
    {
        return $this->BelongsTo('App\Models\Cost_Center');
    }
}

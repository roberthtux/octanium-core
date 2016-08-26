<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function product()
    {
        return $this->HasMany('App\Models\Product');
    }
}

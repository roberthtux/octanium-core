<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost_Center extends Model
{
    public function cash_register()
    {
        return $this->HasMany('App\Models\Cash_register');
    }
}

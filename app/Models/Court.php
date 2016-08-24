<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
    public function cash_register()
    {
        return $this->BelongsTo('App\Models\Cash_register');
    }
    public function mark()
    {
        return $this->BelongsTo('App\Models\Mark');
    }
}

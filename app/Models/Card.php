<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Card_Transaction');
    }
}

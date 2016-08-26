<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'id';

    public function card()
    {
        return $this->hasMany('App\Models\Card');
    }

    public function address()
    {
        return $this->hasMany('App\Models\Address');
    }
}

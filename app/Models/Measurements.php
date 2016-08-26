<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurements extends Model
{
    public function hose()
    {
        return $this->BelongsTo('App\Models\Hose');
    }
    public function court()
    {
        return $this->BelongsTo('App\Models\Court');
    }
    public function schedule()
    {
        return $this->BelongsTo('App\Models\Schedule');
    }
}

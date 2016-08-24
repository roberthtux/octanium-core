<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hose extends Model
{
    public function dispensary()
    {
        return $this->BelongsTo('App\Models\Dispensary');
    }
    public function product()
    {
        return $this->BelongsTo('App\Models\Product');
    }
    public function mark()
    {
        return $this->BelongsTo('App\Models\Mark');
    }
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function schedule()
    {
        return $this->HasMany('App\Models\Schedule');
    }

    public function store_movement()
    {
        return $this->HasMany('App\Models\Store_movement');
    }
    public function usertype()
    {
        return $this->hasOne('App\Models\UserType');
    }
    public function turn()
    {
        return $this->HasMany('App\Models\Turn');
    }
    public function court()
    {
        return $this->HasMany('App\Models\Court');
    }
    public function cash_register()
    {
        return $this->HasMany('App\Models\Cash_register');
    }
    public function profile()
    {
        return $this->belongsToMany('App\Models\Profile');
    }
}

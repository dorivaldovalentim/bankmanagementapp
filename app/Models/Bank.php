<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function cards()
    {
        return $this->hasMany('App\Models\Card', 'bank_id');
    }
}

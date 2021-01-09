<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /** Relacionando banco com os cartões */
    
    public function cards()
    {
        return $this->hasMany('App\Models\Card');
    }
}

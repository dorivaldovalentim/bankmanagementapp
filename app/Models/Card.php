<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }
}

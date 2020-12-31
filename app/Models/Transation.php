<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transation extends Model
{
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
}

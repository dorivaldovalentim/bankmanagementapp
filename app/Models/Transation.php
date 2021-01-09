<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transation extends Model
{
    /** Relacionando transação com os usuários */
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /** Relacionando transação com os cartões */
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    protected $guarded = array('_token');

    /** Relacionando dívidas com usuários */
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

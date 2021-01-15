<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebitsLog extends Model
{
    protected $guarded = array('_token');
    
    /** Relacionando log de dívidas com usuários */
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /** Relacionando log de dívidas com dívidas */
    
    public function debit()
    {
        return $this->belongsTo('App\Models\Debit', 'debit_id');
    }
}

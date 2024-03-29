<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;

    /** Relacionando cartão com o usuário */
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /** Relacionando cartão com os bancos */
    
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank', 'bank_id');
    }

    /** Relacionando cartão com as transações */

    public function transations()
    {
        return $this->hasMany('App\Models\Transation');
    }
}

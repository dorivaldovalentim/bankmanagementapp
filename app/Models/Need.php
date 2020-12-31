<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    protected $fillable = array('need', 'amount', 'description', 'status');

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

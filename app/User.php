<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Relacionando user com os cartões */

    public function cards()
    {
        return $this->hasMany('App\Models\Card');
    }

    /** Relacionando user com as transações */
    
    public function transations()
    {
        return $this->hasMany('App\Models\Transation');
    }

    /** Relacionando user com as dívidas */

    public function debits()
    {
        return $this->hasMany('App\Models\Debit');
    }

    /** Relacionando user com as log de dívidas */

    public function debits_logs()
    {
        return $this->hasMany('App\Models\DebitsLog');
    }

    /** Relacionando user com as necessidades */

    public function needs()
    {
        return $this->hasMany('App\Models\Need');
    }
}

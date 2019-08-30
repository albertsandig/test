<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userfullname','username', 'email', 'number','password','user_access_level','sa'
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


    /**
     * Get the user sent emails
     */
    public function user_sent_mails()
    {
        return $this->hasMany('App\Mailbox','created_by');
    }

     /**
     * Get the user emails
     */
    public function user_mails()
    {
        return $this->hasMany('App\Mailbox','send_to');
    }
}

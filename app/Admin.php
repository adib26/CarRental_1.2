<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Model
{


    use Notifiable;
    public $timestamps = false;
    protected $table = 'Admins';


    protected $fillable = [
        
 	'email','password'
    ];

    protected $hidden = [
        'password',
    ];






}
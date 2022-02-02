<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class User extends Model
=======

class User extends Authenticable

>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b
{
   use HasFactory, Notifiable;
   
   public $table = "users";
   public $timestamps = false;
   protected $fillable = [
       'id',
       'name',
       'username',
       'password',
       'is_admin',
    ];
}

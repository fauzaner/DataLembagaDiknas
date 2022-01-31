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
>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a
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

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD:app/Models/User.php
class User extends Model
=======
class User extends Authenticable

>>>>>>> c11f458e2c323858b1599524c1acf0d90130bf18:app/Models/Users.php
{
   use HasFactory;
   public $table = "users";
   public $timestamps = false;
   protected $fillable = [
       'name',
       'username',
       'password',
       'is_admin',
    ];
}

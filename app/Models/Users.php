<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD:app/Models/User.php
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticable
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd:app/Models/Users.php
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

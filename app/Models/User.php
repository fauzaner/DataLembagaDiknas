<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Models
{
   use HasFactory;
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

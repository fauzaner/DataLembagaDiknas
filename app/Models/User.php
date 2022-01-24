<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticable
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

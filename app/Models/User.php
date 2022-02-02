<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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

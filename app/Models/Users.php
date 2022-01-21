<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
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

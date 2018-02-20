<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $fillable = ['name', 'nickname', 'email', 'password', 'avatar' , 'created_at', 'updated_at'];
    protected $table = 'users';
    //protected $primaryKey = '';
    //protected $timestamps = true;
}
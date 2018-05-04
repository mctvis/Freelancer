<?php

namespace project\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class User extends Model implements AuthenticatableContract 
{
    use Authenticatable;
    protected $table='users';
    protected $fillable=[
    'username',
    'email',
    'password',
    'first_name',
    'lastname',
    ];
    protected $hidden=[
    'password',
     'remember_token'];
}

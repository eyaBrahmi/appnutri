<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{


    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','role',
      ];

      public function setPasswordAttribute($password)
      {   
          $this->attributes['password'] = bcrypt($password);
      }


      public function fiches(){
          
        return $this->hasMany(Fiche::class, 'user_id', 'id');
    }
  
}
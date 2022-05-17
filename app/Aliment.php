<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{


    protected $table = 'aliments';

    protected $fillable = [
        
         'nom_aliment'
      ];


      public function fiches(){
          
          return $this->hasMany(Fiche::class, 'aliment_id', 'id');
      }
}

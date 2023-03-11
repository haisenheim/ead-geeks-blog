<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lignes(){
        return $this->hasMany('App\Models\Ligne','commande_id');
    }


}

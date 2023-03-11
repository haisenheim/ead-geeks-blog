<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function articles(){
        return $this->hasMany('App\Models\Article','categorie_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function produits(){
        return $this->hasMany('App\Models\Produit','type_id');
    }


}

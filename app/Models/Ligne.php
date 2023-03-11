<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function commande(){
        return $this->belongsTo('App\Models\Commande','commande_id');
    }

    public function produit(){
        return $this->belongsTo('App\Models\Produit','produit_id');
    }
}

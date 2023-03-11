<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cat(){
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }

    public function getPhotoAttribute(){
        $host = request()->getSchemeAndHttpHost();
        $path = $host.'/'.$this->image_uri;
        return $path;
    }
}

<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){
        echo "Je suis la page d'accueil de l'admin";
    }

}

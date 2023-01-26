<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
       return view('FrontOffice.index');
    }

    public function about()
    {
       return view('FrontOffice.about');
    }

    public function getContactForm()
    {
       return view('FrontOffice.contact');
    }

}

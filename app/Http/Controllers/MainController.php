<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function showMainPage() {

        if(auth()->check())
            return View('main');
        // show the form
        else
            return redirect('/login');


    }
}

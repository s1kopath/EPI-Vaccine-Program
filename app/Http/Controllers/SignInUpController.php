<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInUpController extends Controller
{
    public function      list()
    {
        return view('content.SignInUp');
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helplinecontroller extends Controller
{
    public function      list()
    {
        return view('content.helpline');
     }
    //  public function      patients()
    // {
    //     return view('content.helpline');
    //  }
}

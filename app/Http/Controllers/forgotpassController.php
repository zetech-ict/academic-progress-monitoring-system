<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgotpassController extends Controller
{
    public function forgotpassword()
    {
        return view('forgotpassword');
    }
}

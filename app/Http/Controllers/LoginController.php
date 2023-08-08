<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form()  {
        return "<h2>Hello Login</h2>";
    }
    public function login_process()  {
        return "<h2>Hello process</h2>";
    }
}

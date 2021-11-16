<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
   


    public function index(Request $request)
    {
        $logins = Login::orderBy('login_at', 'asc')->get();

        return view('admin.login.index', ['logins' => $logins]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BermainController extends Controller
{
    public function index(){
        return view('users.bermain');
    }
}

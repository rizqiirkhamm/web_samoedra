<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimbelController extends Controller
{
    public function index(){
        return view('users.bimbel');
    }
}

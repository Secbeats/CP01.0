<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoneeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Donee');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonatorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Donator');
    }
}

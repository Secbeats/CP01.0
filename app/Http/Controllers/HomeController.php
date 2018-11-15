<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $page = 'pages.home';
        if(Auth::user()){
            if(Auth::user()->role == 'donator'){
                $page = 'pages.donator.dashboard';
            }elseif(Auth::user()->role == 'donee'){
                $page = 'pages.donee.dashboard';
            }else{
                $page = 'pages.admin.dashboard';
            }
        }
        return view($page);
    }
}

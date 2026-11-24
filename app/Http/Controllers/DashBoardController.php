<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index() {
        if(Auth::check()){
			return view('layouts.admin.dashboard');
		};
        return view('login');
    }
}

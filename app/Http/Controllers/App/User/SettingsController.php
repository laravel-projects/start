<?php

namespace App\Http\Controllers\App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SettingsController extends Controller
{
	public function __construct(){

        $this->middleware('auth');
    }
    
	public function index(){ 
        $user = Auth::user();
        return view('pages.profile.settings.index',compact('user'));
    }

    public function security(){
        $user = Auth::user();
        return view('pages.profile.settings.security',compact('user'));
    }
}

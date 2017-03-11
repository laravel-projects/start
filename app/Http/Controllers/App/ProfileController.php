<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Auth;

class ProfileController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('home');
    }

    public function settings(){
    	$user = Auth::user();
    	return view('pages.profile.settings',compact('user'));
    }


}

<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class ProfileController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index($username)
    {
    	$user = User::where('username',$username)->first(); 
        return view('pages.profile.index',compact('user'));
    }

    public function home()
    {
        return view('home');
    }
}

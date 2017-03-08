<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
    
	/* public home page */

    public function index(){
        return view('welcome');
    } 

 	/* user profile page */
    public function profile($username)
    {
    	$user = User::where('username',$username)->first();  
        if(!empty($user->id)){
        	return view('pages.profile.index',compact('user')); 
        }else{
        	return abort(401);
        }
    }
}

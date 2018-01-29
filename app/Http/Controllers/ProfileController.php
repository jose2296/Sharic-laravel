<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller


{
	function show()
	{
		$user=Auth::user();


		return view('profile',['user'=>$user]);
	}
}

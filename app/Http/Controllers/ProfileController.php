<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller



{

	public function __construct() {

		$this->middleware('auth');
	}

	function show()
	{
		$user=Auth::user();
		$info=UserInfo::all()->where('user_id','=',$user->id);


		return view('profile',['user'=>$user,'info'=>$info[0]]);
	}
}

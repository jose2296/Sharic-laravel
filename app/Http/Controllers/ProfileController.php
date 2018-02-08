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
<<<<<<< HEAD
		$info=UserInfo::all()->where('user_id','=',$user->id);
//dd($info[1]);

		return view('profile',['user'=>$user,'info'=>$info[1]]);
=======


		return view('profile',['user'=>$user]);
>>>>>>> parent of dce929c... s
	}
}

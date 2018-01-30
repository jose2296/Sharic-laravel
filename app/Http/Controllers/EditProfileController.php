<?php

namespace App\Http\Controllers;

use App\UserInfo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function update()
	{

	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show()
	{
		return view('editProfile');
	}
}

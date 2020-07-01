<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function index(){
		return view('register');
	}

	public function form(Request $request){
		//dd($request -> all());
		$awalnama = $request['awalnama'];
		$akhirnama = $request['akhirnama'];
		return view('selamatdatang', ['awalnama' => $awalnama, 'akhirnama' => $akhirnama]);
	}
}

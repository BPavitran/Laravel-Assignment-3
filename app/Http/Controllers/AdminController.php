<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
   /* public function_construct()
	{
		$this->middleware('admin');
	}*/
	
	public function home()
	{
		$data['data']=DB::table('users')->get();
		if(count($data)>0)
		{
		return view('admin',$data);
		}
	}
}

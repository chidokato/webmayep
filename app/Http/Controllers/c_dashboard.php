<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class c_dashboard extends Controller
{
	public function dashboard()
    {
    	return view('admin.dashboard',[
        ]);
    }
}


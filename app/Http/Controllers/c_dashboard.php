<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\category;
use App\user;

class c_dashboard extends Controller
{
	public function dashboard()
    {
        $category = category::orderBy('id','desc')->get();
        $user = user::orderBy('id','desc')->get();
    	return view('admin.dashboard',[
            'category'=>$category,
            'user'=>$user,
        ]);
    }
}


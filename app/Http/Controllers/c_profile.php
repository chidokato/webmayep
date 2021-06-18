<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class c_profile extends Controller
{
    public function getlist()
    {
    	$profile = User::where('id', Auth::User()->id)->first();
        $user = User::orderBy('id','desc')->get();
    	return view('admin.profile.list',[
    		'profile'=>$profile,
			'user'=>$user,
		]);
    }

    public function postedit(Request $Request,$id)
    {
        $profile = User::find($id);
        $profile->name = $Request->name;
        if(isset($Request->img)){$profile->avatar = $Request->img;}
        $profile->save();

        return redirect('admin/profile/list')->with('Alerts','Thành công');
    }

    
}

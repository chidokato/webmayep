<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use File;

class usercontroller extends Controller
{
    //
    public function getlist()
    {
    	$user = user::orderBy('id','desc')->get();
    	return view('admin.user.list',['user'=>$user]);
    }

    public function getadd()
    {
    	return view('admin.user.addedit');
    }

    public function postadd(Request $Request)
    {
    	$this->validate($Request,
    		[
    			'name' => 'Required|min:3|max:50',
                // 'email' => 'Required|email|unique:users,email',
    			'email' => 'Required|unique:users,email',
    			'password' => 'Required',
    			'passwordagain' => 'Required|same:password',
    		],
    		[
    		] );
    	$user = new user;
        $user->name = $Request->name;
        $user->email = $Request->email.'@gmail.com';
        $user->password = bcrypt($Request->password);
        $user->permission = $Request->permission;
        if ($Request->hasFile('img')) {
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/user/".$filename)){$filename = str_random(4)."_".$filename;}
            $file->move('data/user', $filename);
            $user->avatar = $filename;
        }
        $user->save();

        return redirect('admin/user/list')->with('Alerts','Thành công');

    }

    public function getedit($id)
    {
        $user = user::find($id);
    	return view('admin.user.addedit',['user'=>$user]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,
            [
                'name' => 'Required|min:3|max:50'
            ],
            [
                
            ] );
        $user = user::find($id);
        $user->name = $Request->name;
        if($user->permission > 0)
        {
            $user->permission = $Request->permission;
        }
        if($Request->changepassword == "on")
        {
            $this->validate($Request,
            [
                'password' => 'Required',
                'passwordagain' => 'Required|same:password'                
            ],
            [
                
            ] );
            $user->password = bcrypt($Request->password);
        }
        if ($Request->hasFile('img')) {
            if(File::exists('data/user/'.$user->avatar)) { File::delete('data/user/'.$user->avatar); } // xóa ảnh
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/user/".$filename)){$filename = str_random(4)."_".$filename;}
            $file->move('data/user', $filename);
            $user->avatar = $filename;
        } // thêm ảnh
        $user->save();

        // return redirect('admin/user/edit/'.$id)->with('Alerts','Thành công');
        return redirect('admin/user/list')->with('Alerts','Thành công');
    }

    public function getdelete($id)
    {
        if (Auth::User()->id == $id) {
            return redirect('admin/user/list')->with('Errors','Bạn không thể xóa chính mình ');
        }else{
            $user = user::find($id);
            $user->delete();
            return redirect('admin/user/list')->with('Alerts','Thành công');
        }
        
    }


    public function getlogin()
    {
    	return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        $email = $request->name.'@gmail.com';
    	$this->validate($request,[
    		'name' => 'required',
    		'password' => 'required|min:3|max:32'
    		],[

            ]);
    	if(Auth::attempt(['email'=>$email,'password'=>$request->password]))
    	{
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return redirect('admin_login')->with('Alerts','Lỗi ! Nhập sai email hoặc mật khẩu !');
    	}

    }

    public function getlogout()
    {
        Auth::logout();
        return redirect('admin_login');
    }
    
}

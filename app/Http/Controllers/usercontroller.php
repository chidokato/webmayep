<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\category;
use App\articles;
use File;

class usercontroller extends Controller
{
    //
    public function profile($id)
    {
    	$user = user::find($id);
        $category = category::where('user_id', $user->id)->orderBy('id','desc')->take(20)->get();
        $product = articles::where('sort_by', 1)->where('user_id', $user->id)->orderBy('id','desc')->take(20)->get();
        $news = articles::where('sort_by', 2)->where('user_id', $user->id)->orderBy('id','desc')->take(20)->get();
        return view('admin.user.profile',[
            'data'=>$user,
            'category'=>$category,
            'product'=>$product,
            'news'=>$news,
        ]);
    }

    public function alerts($id)
    {
        $user = user::find($id);
        return view('admin.user.alerts',[
            'data'=>$user,
        ]);
    }

    public function getlist()
    {
        $user = user::orderBy('id','desc')->get();
        return view('admin.user.list',['user'=>$user]);
    }

    public function search(Request $Request)
    {
        $datefilter[] = '';
        $user = user::orderBy('id','desc')->where('id','!=' , 0);
        if($Request->key){
            $user->where('name','like',"%$Request->key%");
        }
        if(isset($Request->datefilter)){
            $datefilter = explode(" - ", $Request->datefilter);
            $day1 = date('Y-m-d',strtotime($datefilter[0]));
            $day2 = date('Y-m-d',strtotime($datefilter[1]));
            // $user->whereBetween('created_at', [$day1, $day2]);
            $user->whereDate('created_at','>=', $day1)->whereDate('created_at','<=', $day2);
        }
        $user = $user->paginate($Request->paginate);

        return view('admin.user.list',[
            'user'=>$user,
            'key'=>$Request->key,
            'datefilter'=>$Request->datefilter,
            'paginate'=>$Request->paginate,
        ]);
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
    			'password' => 'Required',
    			'passwordagain' => 'Required|same:password',
    		],
    		[
    		] );
    	$user = new user;
        $user->name = $Request->name;
        $user->password = bcrypt($Request->password);
        $user->permission = $Request->permission;
        $user->your_name = $Request->your_name;
        $user->email = $Request->email;
        $user->phone = $Request->phone;
        $user->birthday = $Request->birthday;
        $user->facebook = $Request->facebook;
        
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
    	return view('admin.user.addedit',['data'=>$user]);
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
        $user->your_name = $Request->your_name;
        $user->email = $Request->email;
        $user->phone = $Request->phone;
        $user->birthday = $Request->birthday;
        $user->facebook = $Request->facebook;
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
            [] );
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
            return redirect('admin/user/list')->with('error','Bạn không thể xóa chính mình ');
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
    	$this->validate($request,[
    		'name' => 'required',
    		'password' => 'required|min:3|max:32'
    		],[]);
    	if(Auth::attempt(['name'=>$request->name,'password'=>$request->password]))
    	{
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return redirect('admin_login')->with('Alerts','Lỗi ! Nhập sai tên đăng nhập hoặc mật khẩu !');
    	}
    }

    public function getlogout()
    {
        Auth::logout();
        return redirect('admin_login');
    }
    
}

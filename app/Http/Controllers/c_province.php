<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\province;
use Image;
use File;

class c_province extends Controller
{
    public function getlist()
    {
        $province = province::orderBy('id','desc')->paginate(50);
        $count = province::orderBy('id','desc')->count();
        // $province = province::orderBy('id','desc')->get();
        // foreach ($province as $key => $value) {
        // 	$province = province::find($value->id);
        // 	$province->user_id = '1';
        // 	$province->save();
        // }
    	return view('admin.province.list',[
            'province'=>$province,
            'count'=>$count,
        ]);
    }

    public function loc(Request $Request)
    {
        $province = province::orderBy('id','desc')->where('id','!=' , 0);
        if($Request->name){
            $province->where('name','like',"%$Request->name%");
        }
        // if($Request->ngay1 && $Request->ngay2){
        //     $product->whereBetween('ngayketthuc', array($Request->ngay1, $Request->ngay2));
        // }
        $province = $province->paginate($Request->paginate);
        return view('admin.province.list',[
            'province'=>$province,
            'key'=>$Request->name,
            'paginate'=>$Request->paginate,
        ]);
    }

    
}

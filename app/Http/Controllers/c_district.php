<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\province;
use App\district;
use Image;
use File;

class c_district extends Controller
{
    public function getlist()
    {
        $district = district::orderBy('id','desc')->paginate(50);
        $count = district::orderBy('id','desc')->count();
        $province = province::orderBy('id','desc')->get();

        // $data = district::orderBy('id','desc')->get();
        // foreach ($data as $key => $value) {
        // 	$update = district::find($value->id);
        // 	$update->user_id = '1';
        // 	$update->status = 'true';
        // 	$update->save();
        // }

    	return view('admin.district.list',[
            'district'=>$district,
            'count'=>$count,
            'province'=>$province,
        ]);
    }
    public function loc(Request $Request)
    {
    	$count = district::orderBy('id','desc')->count();
        $district = district::orderBy('id','desc')->where('id','!=' , 0);
        if($Request->name){
            $district->where('name','like',"%$Request->name%");
        }
        if($Request->province_id){
            $district->where('province_id',$Request->province_id);
        }
        $district = $district->paginate($Request->paginate);
        $province = province::orderBy('id','desc')->get();
        return view('admin.district.list',[
            'district'=>$district,
            'key'=>$Request->name,
            'paginate'=>$Request->paginate,
            'province'=>$province,
            'province_id'=>$Request->province_id,
            'count'=>$count,
        ]);
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting;

class c_setting extends Controller
{
    public function getlist()
    {
    	$setting = setting::where('id',1)->first();
    	return view('admin.setting.list',['data'=>$setting]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,['name' => 'Required'],[] );
        $setting = setting::find($id);
        $setting->name = $Request->name;
        $setting->address = $Request->address;
        $setting->email = $Request->email;
        $setting->hotline = $Request->hotline;
        $setting->hotline1 = $Request->hotline1;
        $setting->facebook = $Request->facebook;
        $setting->youtube = $Request->youtube;
        $setting->twitter = $Request->twitter;
        $setting->analytics = $Request->analytics;
        $setting->fbapp = $Request->fbapp;
        $setting->sidebar = $Request->sidebar;
        $setting->maps = $Request->maps;
        $setting->codeheader = $Request->codeheader;
        $setting->codebody = $Request->codebody;
        $setting->title = $Request->title;
        $setting->description = $Request->description;
        $setting->keywords = $Request->keywords;
        $setting->robot = $Request->robot;
        if($Request->img)
        {
            $setting->img = $Request->img;
        }
        $setting->save();
        return redirect('admin/setting/list')->with('Success','Success');
    }
}

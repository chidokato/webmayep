<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Image;
use File;
use App\themes;

class c_themes extends Controller
{
    public function getlist()
    {
        $themes = themes::orderBy('id','desc')->get();
        $logo = themes::where('note','logo')->orderBy('id','desc')->get();
        $banner1 = themes::where('note','banner 1')->orderBy('id','desc')->get();
        $banner2 = themes::where('note','banner 2')->orderBy('id','desc')->get();
        $banner3 = themes::where('note','banner 3')->orderBy('id','desc')->get();
    	return view('admin.themes.list',[
            'themes'=>$themes,
            'logo'=>$logo,
            'banner1'=>$banner1,
            'banner2'=>$banner2,
            'banner3'=>$banner3,
		]);
    }

    public function getadd()
    {
    	return view('admin.themes.add');
    }

    public function postadd(Request $Request)
    {
        if ($Request->idlogo) {
           foreach ($Request->idlogo as $key => $id) {
                $themes = themes::find($id);
                $themes->name = $Request->namelogo[$key];
                if (isset($Request->file('imglogo')[$key])) {
                    if(File::exists('data/themes/'.$themes->img)) { File::delete('data/themes/'.$themes->img); }
                    $file = $Request->file('imglogo')[$key];
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/themes/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $file->move('data/themes', $filename);
                    $themes->img = $filename;
                }
                $themes->save();
           }
        }
        if ($Request->idbanner1) {
           foreach ($Request->idbanner1 as $key => $id) {
                $themes = themes::find($id);
                $themes->name = $Request->namebanner1[$key];
                $themes->tit = $Request->titbanner1[$key];
                $themes->link = $Request->linkbanner1[$key];
                if (isset($Request->file('banner1')[$key])) {
                    if(File::exists('data/themes/'.$themes->img)) { File::delete('data/themes/'.$themes->img); }
                    $file = $Request->file('banner1')[$key];
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/themes/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $file->move('data/themes', $filename);
                    $themes->img = $filename;
                }
                $themes->save();
           }
        }
        if ($Request->idbanner2) {
           foreach ($Request->idbanner2 as $key => $id) {
                $themes = themes::find($id);
                $themes->name = $Request->namebanner2[$key];
                if (isset($Request->file('banner2')[$key])) {
                    if(File::exists('data/themes/'.$themes->img)) { File::delete('data/themes/'.$themes->img); }
                    $file = $Request->file('banner2')[$key];
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/themes/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $file->move('data/themes', $filename);
                    $themes->img = $filename;
                }
                $themes->save();
           }
        }
        if ($Request->idbanner3) {
           foreach ($Request->idbanner3 as $key => $id) {
                $themes = themes::find($id);
                $themes->name = $Request->namebanner3[$key];
                if (isset($Request->file('banner3')[$key])) {
                    if(File::exists('data/themes/'.$themes->img)) { File::delete('data/themes/'.$themes->img); }
                    $file = $Request->file('banner3')[$key];
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/themes/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $file->move('data/themes', $filename);
                    $themes->img = $filename;
                }
                $themes->save();
           }
        }
        return redirect('admin/themes/list')->with('Alerts','Thành công');
    }

    public function getdelete($id)
    {
        $themes = themes::find($id);
        // xóa ảnh
        if(File::exists('data/themes/'.$themes->img)) {
            File::delete('data/themes/'.$themes->img);
        }
        // xóa ảnh
        $themes->delete();
        return redirect('admin/themes/list')->with('Alerts','Thành công');
    }
}

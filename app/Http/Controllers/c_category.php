<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\seo;
use App\category;
use Image;
use File;

class c_category extends Controller
{
    public function getlist()
    {
        $category = category::orderBy('view','asc')->get();
    	$parent_cat = category::where('parent',0)->orderBy('view','asc')->get();
    	return view('admin.category.list',[
            'category'=>$category,
            'parent_cat'=>$parent_cat,
        ]);
    }

    public function getadd()
    {
        $category = category::where('sort_by',1)->select('id','name','parent')->get();
    	return view('admin.category.addedit',['category'=>$category]);
    }

    public function postadd(Request $Request)
    {
        $this->validate($Request,['name' => 'Required|unique:category,name'],[] );
        // seo
        $seo = new seo;
        $seo->title = $Request->title;
        $seo->description = $Request->description;
        $seo->keywords = $Request->keywords;
        $seo->robot = $Request->robot;
        $seo->save();

    	$category = new category;
        $category->user_id = Auth::User()->id;
        $category->seo_id = $seo->id;
        $category->name = $Request->name;
        $category->sku = str_random(8);
        $category->slug = changeTitle($Request->name);
        $category->content = $Request->content;
        $category->sort_by = $Request->sort_by;
        $category->parent = $Request->parent;
        $category->icon = $Request->icon;
        $category->status = 'true';
        $category->view = $Request->view;
        if ($Request->hasFile('img')) {
            $file = $Request->file('img'); $filename = $file->getClientOriginalName();
            while(file_exists("data/category/".$filename)){$filename = str_random(4)."_".$filename;}
            $img = Image::make($file)->resize(120, 120, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/thumbnail/'.$filename));
            $img = Image::make($file)->resize(1000, 1000, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/'.$filename));
            $category->img = $filename;
        }
        $category->save();



        return redirect('admin/category/list')->with('Success','Thành công');
    }

    public function getedit($id)
    {
        $data = category::findOrFail($id);
        $seo = seo::findOrFail($data['seo_id']);
        $category = category::where('sort_by',$data['sort_by'])->select('id','name','parent')->get();
    	return view('admin.category.addedit',['data'=>$data, 'seo'=>$seo, 'category'=>$category]);
    }

    public function double($id)
    {
        $data = category::findOrFail($id);
        $category = category::where('sort_by',$data['sort_by'])->select('id','name','parent')->get();
        return view('admin.category.double',['data'=>$data, 'category'=>$category]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,['name' => 'Required'],[] );      
        $category = category::find($id);
        $category->name = $Request->name;
        $category->slug = $Request->slug;
        $category->content = $Request->content;
        $category->icon = $Request->icon;
        $category->view = $Request->view;
        if($id == $Request->parent){
            return redirect('admin/category/edit/'.$id)->with('Errors','Errors parent');
        }
        else{
            $category->parent = $Request->parent;
        }
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/category/thumbnail/'.$category->img)) { File::delete('data/category/'.$category->img); File::delete('data/category/thumbnail/'.$category->img); }
            // xóa xảnh cũ
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/category/".$filename)){$filename = str_random(4)."_".$filename;}
            $img = Image::make($file)->resize(120, 120, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/thumbnail/'.$filename));
            $img = Image::make($file)->resize(1000, 1000, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/'.$filename));
            $category->img = $filename;
            // thêm ảnh mới
        }
        $category->save();

        $seo = seo::find($category->seo_id);
        $seo->title = $Request->title;
        $seo->description = $Request->description;
        $seo->keywords = $Request->keywords;
        $seo->robot = $Request->robot;
        $seo->save();
        return redirect('admin/category/list')->with('Success','Thành công');
    }

    public function getdelete($id)
    {
        $category = category::find($id);
        $count = category::where('parent',$id)->count();
        if($count > 0)
        {
            return redirect('admin/category/list')->with('errors','Errors parent');
        }
        else
        {
            if(File::exists('data/category/'.$category->img)) {
                File::delete('data/category/'.$category->img);
                File::delete('data/category/thumbnail/'.$category->img); }
            $seo = seo::find($category->seo_id);
            $seo->delete();
            $category->delete();
            return redirect('admin/category/list')->with('Success','Success');
        }
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Image;
use File;
use App\seo;
use App\product;
use App\mausac;
use App\form;
use App\size;
use App\articles;
use App\category;
use App\images;

class c_product extends Controller
{
    public function getlist()
    {
        $articles = articles::where('sort_by',1)->orderBy('id','desc')->get();
        return view('admin.product.list',[
            'product'=>$articles
        ]);
    }

    public function getadd()
    {
        $category = category::where('sort_by',1)->orderBy('id','desc')->get();
        $mausac = mausac::orderBy('id','desc')->get();
        $form = form::orderBy('id','desc')->get();
        $size = size::orderBy('id','desc')->get();
        return view('admin.product.addedit',[
            'category'=>$category,
            'mausac'=>$mausac,
            'form'=>$form,
            'size'=>$size,
        ]);
    }

    public function postadd(Request $Request)
    {
        $this->validate($Request,['name' => 'Required'],[] );
        // product
        $product = new product;
        $product->price = $Request->price;
        $product->oldprice = $Request->oldprice;
        $product->saleoff = $Request->saleoff;
        $product->number = $Request->number;
        if(isset($Request->mausac)){$product->mausac_id = implode(',', $Request->mausac);}
        $product->save();
        // seo
        $seo = new seo;
        $seo->title = $Request->title;
        $seo->description = $Request->description;
        $seo->keywords = $Request->keywords;
        $seo->robot = $Request->robot;
        $seo->save();
        // articles
        $articles = new articles;
        $articles->user_id = Auth::User()->id;
        $articles->category_id = $Request->category_id;
        if(isset($Request->category_sku)){$articles->category_sku = implode(',', $Request->category_sku);}
        $articles->seo_id = $seo->id;
        $articles->product_id = $product->id;
        $articles->sort_by = '1';
        $articles->sku = str_random(8);
        $articles->name = $Request->name;
        $articles->slug = changeTitle($Request->name);
        $articles->detail = $Request->detail;
        $articles->content = $Request->content;
        $articles->hits = '50';
        $articles->status = 'true';
        // thêm ảnh
        if ($Request->hasFile('img')) {
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/product/300/".$filename)){ $filename = str_random(4)."_".$filename; }
            $img = Image::make($file)->resize(1000, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/'.$filename));
            $img = Image::make($file)->resize(300, 300, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/300/'.$filename));
            $img = Image::make($file)->resize(80, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/80/'.$filename));
            $articles->img = $filename;
        }
        $articles->save();

        // images
        if($Request->hasFile('imgdetail')){
            foreach ($Request->file('imgdetail') as $file) {
                $images = new images();
                if(isset($file)){
                    $images->articles_id = $articles->id;
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/images/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $img = Image::make($file)->resize(1000, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/images/'.$filename));
                    $img = Image::make($file)->resize(100, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/images/100/'.$filename));
                    $images->img = $filename;
                    $images->save();
                }
            }
        }

        return redirect('admin/product/list')->with('Alerts','Thành công');
    }

    public function getedit($id)
    {
        $data = articles::findOrFail($id);
        $seo = seo::findOrFail($data['seo_id']);
        $category = category::where('sort_by',1)->orderBy('id','desc')->get();
        $mausac = mausac::orderBy('id','desc')->get();
        $form = form::orderBy('id','desc')->get();
        $size = size::orderBy('id','desc')->get();
        return view('admin.product.addedit',[
            'data'=>$data,
            'category'=>$category,
            'seo'=>$seo,
            'mausac'=>$mausac,
            'form'=>$form,
            'size'=>$size,
        ]);
    }

    public function postedit(Request $Request,$id)
    {
        $this->validate($Request,['name' => 'Required'],[] );     
        $articles = articles::find($id);
        $articles->name = $Request->name;
        $articles->slug = $Request->slug;
        $articles->detail = $Request->detail;
        $articles->content = $Request->content;
        $articles->category_id = $Request->category_id;
        if(isset($Request->category_sku)){$articles->category_sku = implode(',', $Request->category_sku);}
        else{$articles->category_sku='';}
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/product/'.$articles->img)) { 
                File::delete('data/product/'.$articles->img); 
                File::delete('data/product/300/'.$articles->img); 
                File::delete('data/product/80/'.$articles->img); 
            }
            // xóa ảnh cũ
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/product/300/".$filename)){ $filename = str_random(4)."_".$filename; }
            $img = Image::make($file)->resize(1000, 800, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/'.$filename));
            $img = Image::make($file)->resize(300, 300, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/300/'.$filename));
            $img = Image::make($file)->resize(80, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/product/80/'.$filename));
            $articles->img = $filename;
            // thêm ảnh mới
        }
        $articles->save();
        // seo
        $seo = seo::find($articles['seo_id']);
        $seo->title = $Request->title;
        $seo->description = $Request->description;
        $seo->keywords = $Request->keywords;
        $seo->robot = $Request->robot;
        $seo->save();
        // product
        $product = product::find($articles['product_id']);
        $product->price = $Request->price;
        $product->oldprice = $Request->oldprice;
        $product->saleoff = $Request->saleoff;
        $product->number = $Request->number;
        if(isset($Request->mausac)){$product->mausac_id = implode(',', $Request->mausac);}
        else{$product->mausac_id='';}
        $product->save();

        // thêm ảnh chi tiết
        if($Request->hasFile('imgdetail')){
            foreach ($Request->file('imgdetail') as $file) {
                $images = new images();
                if(isset($file)){
                    $images->articles_id = $articles->id;
                    $filename = $file->getClientOriginalName();
                    while(file_exists("data/images/".$filename)){ $filename = str_random(4)."_".$filename; }
                    $img = Image::make($file)->resize(1000, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/images/'.$filename));
                    $img = Image::make($file)->resize(100, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/images/100/'.$filename));
                    $images->img = $filename;
                    $images->save();
                }
            }
        }
        
        return redirect('admin/product/edit/'.$id)->with('Alerts','Thành công');
    }

    public function getdelete($id)
    {
        $articles = articles::find($id);
        // del seo
        $seo = seo::find($articles->seo_id);
        $seo->delete();
        // del product
        $product = product::find($articles->product_id);
        $product->delete();
        // xóa ảnh
        if(File::exists('data/product/'.$articles->img)) {
            File::delete('data/product/'.$articles->img);
            File::delete('data/product/300/'.$articles->img);
            File::delete('data/product/80/'.$articles->img);
        }
        // del images
        if (isset($articles->images)) {
            foreach ($articles->images as $key => $value) {
                $images = images::find($value->id);
                if(File::exists('data/images/'.$images->img)) {
                    File::delete('data/images/'.$images->img);
                    File::delete('data/images/100/'.$images->img);
                }
                $images->delete();
            }
        }

        $articles->delete();
        return redirect('admin/product/list')->with('Alerts','Thành công');
    }
    public function delete_all(Request $Request)
    {
        if (isset($Request->foo)) {
            foreach($Request->foo as $id){
                $articles = articles::find($id);
                // del seo
                $seo = seo::find($articles->seo_id);
                $seo->delete();
                // del product
                $product = product::find($articles->product_id);
                $product->delete();
                // xóa ảnh
                if(File::exists('data/product/'.$articles->img)) {
                    File::delete('data/product/'.$articles->img);
                    File::delete('data/product/300/'.$articles->img);
                    File::delete('data/product/80/'.$articles->img);
                }
                // del images
                if (isset($articles->images)) {
                    foreach ($articles->images as $key => $value) {
                        $images = images::find($value->id);
                        if(File::exists('data/images/'.$images->img)) {
                            File::delete('data/images/'.$images->img);
                            File::delete('data/images/100/'.$images->img);
                        }
                        $images->delete();
                    }
                }

                $articles->delete();
            }
        }
        return redirect('admin/product/list')->with('Success','Success');
    }
}

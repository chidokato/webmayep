<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Request;
use File;
use App\user;
use App\category;
use App\articles;
use App\mausac;
use App\product;
use App\quanlykho;
use App\images;
use App\customer;
use App\order;
use App\channel;

class c_ajax extends Controller
{   
    // category
    public function sortby($id)
    {
        $data = category::where('sort_by',$id)->get();
        return view('admin.category.listparent',['data'=>$data]);
    }
    public function updateview($id)
    {
        if(Request::ajax()){
            $view = Request::get('view');
            $category = category::find($id);
            $category->view = $view;
            $category->save();
        }
    }
    // end category
    // nhập hàng
    public function mausac1($id, $a_id)
    {
        if(Request::ajax()){
            $quanlykho = quanlykho::where('articles_id',$a_id)->where('mausac_id',$id)->get();
            $data=array();
            foreach($quanlykho as $value ){$data[$value->form_id]= $value;}
            foreach ($data as $f) {echo "<option value='".$f->form->id."'>".$f->form->name."</option>";}
        }
    }
    // end nhập hàng

    // bán hàng
    public function articles($id)
    {
        if(Request::ajax()){
            $articles = articles::find($id);
            $product = product::find($articles->product_id);
            $mausac = mausac::get();
            foreach ($mausac as $key => $value) {
                echo "<option value=''>...</option>";
                if(in_array($value->id, explode(',',$product->mausac_id))){
                    echo "<option value='".$value->id."'>".$value->name."</option>";
                }
            }
        }
    }
    public function mausac($id, $a_id)
    {
        if(Request::ajax()){
            $quanlykho = quanlykho::where('articles_id',$a_id)->where('mausac_id',$id)->get();
            echo "<option value=''>...</option>";
            foreach ($quanlykho as $key => $value) {
                echo "<option value='".$value->size."'>".$value->size."</option>";
            }
        }
    }
    public function change_khang($kh_id)
    {
        if(Request::ajax()){
            $customer = customer::where('id',$kh_id)->first();
            echo "Tên KH: ".$customer->name."<br>";
            echo "Mã KH: ".$customer->code."<br>";
            echo "SĐT: ".$customer->phone."<br>";
            echo "Địa chỉ: ".$customer->address."<br>";
        }
    }
    public function change_order($od_id)
    {
        if(Request::ajax()){
            $order = order::where('id',$od_id)->first();
            $channel = channel::orderBy('id','asc')->get();
            if ($od_id == '0') {
                return view('admin.banhang.ajax_order',['channel'=>$channel]);
            }else{
            echo ' <div class="col-md-6 form-group">
                <label>Kênh bán hàng</label>
                <select disabled name="ch_id" class="form-control">
                    <option value="">'.$order->channel->name.'</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label>Ngày bán hàng</label>
                <input disabled name="date" type="date" value="'.$order->date.'" class="form-control" />
            </div> '; }
        }
    }
    // bán hàng

    // product
    public function del_img_detail($id)
    {
        if(Request::ajax()){
            $images = images::find($id);
            if(File::exists('data/product/'.$images->img)) {
                File::delete('data/product/'.$images->img);
                File::delete('data/product/80/'.$images->img);
            }
            $images->delete();
        }
    }
    public function updatestatusproduct($id)
    {
        if(Request::ajax()){
            $articles = articles::find($id);
            $articles->status = Request::get('status');
            $articles->save();
        }
    }
    // product



  
}
?>

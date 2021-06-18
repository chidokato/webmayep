<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\channel;
use App\customer;
use App\order;
use App\banhang;
use App\supplier;
use App\articles;
use App\mausac;
use App\form;
use App\size;
use App\quanlykho;
use Image;
use File;

class c_banhang extends Controller
{
    public function getlist()
    {
        $orders = order::where('note',0)->orderBy('id','desc')->get();
    	return view('admin.banhang.list',[
			'orders'=>$orders,
		]);
    }
	
    public function getadd()
    {
        $articles = articles::orderBy('id','desc')->get();
		$channel = channel::orderBy('id','asc')->get();
        $customer = customer::orderBy('id','asc')->get();
        $order = order::where('note',0)->orderBy('id','desc')->get();
        $mausac = mausac::orderBy('name','asc')->get();
		$size = size::orderBy('name','asc')->get();
    	return view('admin.banhang.addedit',[
            'articles'=>$articles,
			'channel'=>$channel,
            'customer'=>$customer,
            'order'=>$order,
            'mausac'=>$mausac,
			'size'=>$size,
        ]);
    }
	
    public function postadd(Request $Request)
    {
        if ($Request->order_id == 0) {
            $order = new order;
            $order->date = $Request->date;
            $order->channel_id = $Request->channel_id;
            $order->customer_id = $Request->customer_id;
            $order->save();
            $order = order::findOrFail($order->id);
            $order->code = 'DH'.date('Ym', time()).$order->id;
            $order->save();
            $order_id = $order->id;
        }else{
            $order_id = $Request->order_id;
        }
    	$banhang = new banhang;
		$banhang->order_id = $order_id;
        $banhang->articles_id = $Request->articles_id;
		$banhang->mausac_id = $Request->mausac_id;
		$banhang->size = $Request->size;
		$banhang->number = $Request->number;
		$banhang->price = $Request->price;
		if($Request->number=='')$nhaphang->total = 1 * $Request->price;
        else $nhaphang->total = $Request->number * $Request->price;
    	$banhang->save();
        return redirect('admin/banhang/edit/'.$order_id)->with('Alerts','Thành công');
    }

    public function getedit($id)
    {
        $data = order::findOrFail($id);
		$articles = articles::orderBy('id','desc')->get();
        $channel = channel::orderBy('id','asc')->get();
        $customer = customer::orderBy('id','asc')->get();
        $order = order::orderBy('id','desc')->get();
        $mausac = mausac::orderBy('id','desc')->get();
        
    	return view('admin.banhang.addedit',[
			'data'=>$data,
			'articles'=>$articles,
            'channel'=>$channel,
            'customer'=>$customer,
            'order'=>$order,
            'mausac'=>$mausac,
		]);
    }

    

    public function deleteorder($id)
    {
        $order = order::find($id);
        foreach ($order->banhang as $key => $value) {
            $banhang = banhang::find($value->id);
            $banhang->delete();
        }
        $order->delete();
        return redirect('admin/banhang/list')->with('Success','Success');
    }
    public function dell_banhang($id, $od_id)
    {
        $banhang = banhang::find($id);
        $banhang->delete();
        return redirect('admin/banhang/edit/'.$od_id)->with('Success','Success');
    }

    public function add_sp($id)
    {
        $banhang = new banhang;
        $banhang->order_id = $id;
        $banhang->save();
        return redirect('admin/banhang/edit/'.$id)->with('Success','Success');
    } // thêm sp bán

    public function postedit(Request $Request,$id)
    {
        $order = order::findOrFail($id);
        $order->date = $Request->date;
        $order->channel_id = $Request->channel_id;
        $order->customer_id = $Request->customer_id;
        $order->save();

        if (isset($Request->bh_id)) {
            foreach ($Request->bh_id as $key => $bh_id) {
                $banhang = banhang::findOrFail($bh_id);
                $banhang->articles_id = $Request->articles_id[$key];
                if(isset($Request->mausac_id[$key]))$banhang->mausac_id = $Request->mausac_id[$key];
                if(isset($Request->size[$key]))$banhang->size = $Request->size[$key];
                $banhang->number = $Request->number[$key];
                $banhang->price = $Request->price[$key];
                if($Request->number[$key]==''){$banhang->total = $banhang->price * 1;}
                else{$banhang->total = $banhang->price * $Request->number[$key];}
                $banhang->save();
            }
        }
        
        return redirect('admin/banhang/edit/'.$id)->with('Success','Thành công');
    }
}

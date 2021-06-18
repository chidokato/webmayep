<?php

Route::get('admin','usercontroller@getlogin');
Route::get('admin_login','usercontroller@getlogin');
Route::post('admin/login','usercontroller@postlogin');
Route::get('admin/logout','usercontroller@getlogout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){

	Route::get('dashboard','c_dashboard@dashboard');

	Route::group(['prefix'=>'user'],function(){
		Route::get('list','usercontroller@getlist')->middleware('can:superadmin');
		Route::get('edit/{id}','usercontroller@getedit')->middleware('can:superadmin');
		Route::post('edit/{id}','usercontroller@postedit');
		Route::get('add','usercontroller@getadd')->middleware('can:superadmin');
		Route::post('add','usercontroller@postadd');
		Route::get('delete/{id}','usercontroller@getdelete')->middleware('can:superadmin');

	});
	Route::group(['prefix'=>'profile'],function(){
		Route::get('list','c_profile@getlist');
		Route::get('update/{id}','ajaxcontroller@updateprofile');
		Route::post('edit/{id}','c_profile@postedit');
	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','c_category@getlist');
		Route::get('add','c_category@getadd');
		Route::get('double/{id}','c_category@double');
		Route::post('add','c_category@postadd');
		Route::get('edit/{id}','c_category@getedit');
		Route::post('edit/{id}','c_category@postedit');
		Route::get('delete/{id}','c_category@getdelete');
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('list','c_product@getlist');
		Route::get('add','c_product@getadd');
		Route::post('add','c_product@postadd');
		Route::post('delall','c_product@delall');
		Route::get('edit/{id}','c_product@getedit');
		Route::post('edit/{id}','c_product@postedit');
		Route::get('delete/{id}','c_product@getdelete');
		Route::get('del/{id}/{imid}','c_product@delimages');
	});
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','c_news@getlist');
		Route::get('add','c_news@getadd');
		Route::post('add','c_news@postadd');
		Route::get('edit/{id}','c_news@getedit');
		Route::post('edit/{id}','c_news@postedit');
		Route::get('delete/{id}','c_news@getdelete');
	});
	Route::group(['prefix'=>'themes'],function(){
		Route::get('list','c_themes@getlist');
		Route::post('add','c_themes@postadd');
		Route::get('edit/{id}','c_themes@getedit');
		Route::post('edit/{id}','c_themes@postedit');
		Route::get('delete/{id}','c_themes@getdelete');
	});
	Route::group(['prefix'=>'slider'],function(){
		Route::get('list','c_slider@getlist');
		Route::get('add','c_slider@getadd');
		Route::post('add','c_slider@postadd');
		Route::get('edit/{id}','c_slider@getedit');
		Route::post('edit/{id}','c_slider@postedit');
		Route::get('delete/{id}','c_slider@getdelete');
	});
	Route::group(['prefix'=>'setting'],function(){
		Route::get('list','c_setting@getlist');
		Route::post('edit/{id}','c_setting@postedit');
	});

	// giày dép
	Route::group(['prefix'=>'giaydep'],function(){
		Route::get('list','c_giaydep@getlist');
		Route::post('edit/{id}','c_giaydep@postedit');
	});
	Route::group(['prefix'=>'quanlykho'],function(){
		Route::get('list','c_quanlykho@getlist');
		Route::get('edit/{id}','c_quanlykho@getedit');
		Route::post('edit/{id}','c_quanlykho@postedit');
		Route::get('delete/{qid}/{id}','c_quanlykho@getdelete');
	});
	Route::group(['prefix'=>'nhaphang'],function(){
		Route::get('list','c_nhaphang@getlist');
		Route::get('add','c_nhaphang@getadd');
		Route::post('add','c_nhaphang@postadd'); // lưu đơn hàng
		Route::get('edit/{id}','c_nhaphang@getedit'); // get edit
		Route::post('edit/{id}','c_nhaphang@postedit');
		Route::get('deleteorder/{id}','c_nhaphang@deleteorder'); // xóa đơn hàng
		Route::get('dell_nhaphang/{id}/{od_id}','c_nhaphang@dell_nhaphang'); // xóa sp bán
		Route::get('add_nhaphang/{id}','c_nhaphang@add_sp'); // thêm sản phẩm bán
	});
	Route::group(['prefix'=>'banhang'],function(){
		Route::get('list','c_banhang@getlist');
		Route::get('add','c_banhang@getadd');
		Route::post('add','c_banhang@postadd'); // lưu đơn hàng
		Route::get('edit/{id}','c_banhang@getedit'); // get edit
		Route::post('edit/{id}','c_banhang@postedit');
		Route::get('deleteorder/{id}','c_banhang@deleteorder'); // xóa đơn hàng
		Route::get('dell_banhang/{id}/{od_id}','c_banhang@dell_banhang'); // xóa sp bán
		Route::get('add_banhang/{id}','c_banhang@add_sp'); // thêm sản phẩm bán
	});
	// end giày dép

	// bất động sản
	Route::group(['prefix'=>'province'],function(){
		Route::get('list','c_province@getlist');
		Route::post('loc','c_province@loc');
	});
	Route::group(['prefix'=>'district'],function(){
		Route::get('list','c_district@getlist');
		Route::post('loc','c_district@loc');
	});
	Route::group(['prefix'=>'ward'],function(){
		Route::get('list','c_ward@getlist');
		Route::post('loc','c_ward@loc');
	});
	Route::group(['prefix'=>'street'],function(){
		Route::get('list','c_street@getlist');
		Route::post('loc','c_street@loc');
	});
	// end bất động sản
	
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('sort_by/{id}','c_ajax@sortby'); // category
		Route::get('updateview/{id}','c_ajax@updateview'); // update view category/list

		// nhập hàng
		Route::get('articles/{id}','c_ajax@articles');
		Route::get('mausac/{id}/{a_id}','c_ajax@mausac');
		Route::get('mausac1/{id}/{a_id}','c_ajax@mausac1');
		Route::get('change_khang/{kh_id}','c_ajax@change_khang'); //khách hàng
		Route::get('change_order/{od_id}','c_ajax@change_order'); //đơn hàng
		
		// bán hàng
		Route::get('updatetonkho/{id}','c_ajax@updatetonkho');
		Route::get('updatestatustonkho/{id}','c_ajax@updatestatustonkho');
		Route::get('change_ms/{ms_id}','c_ajax@change_ms');
		Route::get('change_f/{f_id}','c_ajax@change_f');
		Route::get('addsp/{od_id}','c_ajax@addsp');
		Route::get('updatechannelname/{id}','c_ajax@updatechannelname');
		Route::get('addchannel/{name}','c_ajax@addchannel');
		Route::get('delchannel/{id}','c_ajax@delchannel');
		Route::get('add_banhang/{id}','c_ajax@delchannel');


		

	});

	
});

Route::get('/','c_frontend@home');
Route::get('sitemap.xml','c_frontend@sitemap');
Route::get('wishlist','c_frontend@wishlist');
Route::get('cart','c_frontend@cart');
Route::get('my-account','c_frontend@myaccount');
Route::get('{curl}','c_frontend@category');
Route::get('{curl}/{arurl}','c_frontend@articles');
Route::POST('dang-ky','c_frontend@dangky');
Route::POST('search','c_frontend@post_search');

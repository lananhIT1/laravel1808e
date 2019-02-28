<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//tiếp nhận request gửi lên
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
	return 'hello world';
});
Route::get('/hi-you',function(){
	return 'this is valentine day';
});
/****method GET***/
Route::get('/test',function(){
	return "this is test";
});
//  /test : request ng dùng gửi lên
// ::get : cách thức gửi dl
// return "this is test";: response trả kq về

/***method POST**/
Route::post('/demo-post',function(){
	return "this is method post";
});
/***method DELETE**/
Route::delete('/demo-delete',function(){
	return "this is method delete";
});
//chấp nhận mọi phương thức cho 1 request
Route::any('/demo-any',function(){
	return "this is method any";
});
//chấp nhận 1 hoặc nhiều phương thức cho 1 request
Route::match(['get','post','put'],'/all-in-one',function(){
	return "this is match Routes";
});

Route::get('/quynh-bup-be-t1',function(){
	//dieu hong trang
	//header('Location:domain')
	return redirect('nguoi-phan-xu-t1');

});

Route::get('/nguoi-phan-xu-t1',function(){
	return "nguoi phan xu tap 1";
})->name('npx');

Route::get('/film-superman',function(){
	//dieu hong trang
	//header('Location:domain')
	return redirect()->route('npx');
});
//route view
Route::get('/demo-view',function(){
	return view('demo');
});
//truyền tham số vào Route
//tham số bắt buoojv- phải truyền vào request khi gui dl lên server
Route::get('/sam-sung/{name}/{price}',function($namePhone,$pricePhone){
	return "bạn đang xem điện thoại {$namePhone} - gia ban : {$pricePhone}";
});
//tham số ko bắt buộc
Route::get('/apple/{name?}',function($name=null){
	return "bạn đang xem điện thoai iphone {$name}";
});
//validate tham so routes
//tuoi chi dc phép nhập số
//tên chỉ nhập chữ cái
Route::get('/check-age/{age}/{name}',function($age,$name){
	return "my age is {$age}- MY NAME IS {$name}";
})->where(['age'=>'[0-9]+','name'=>'[A-Za-z]+']);
//name route
Route::get('/home-page',function(){
	return view('home-page');
})->name('homePage');
Route::get('/contact-page',function(){
 	return "this is contact page";
})->name('contactPage');
//routes group
Route::get('/admin/home',function(){
	return "admin-home";
});
Route::get('/admin/product',function(){
	return "admin-product";
});
Route::group([
				'prefix'=>'admin',
				'as'=>'admin.'//tất cả các name đều có admin.
],function(){
	Route::get('/home',function(){
	return "admin-home";
	})->name('home');
	Route::get('/product',function(){
	return "admin-product";
	})->name('product');
});

Route::get('/login',function(){
	return redirect()->route('admin.home');
});
Route::get('/watch-film/{age}',function($age){
	return redirect()->route('qbb');
})->name('watchFilm')
->where('age','[0-9]+')
->middleware('myCheckAge');

Route::get('/quynh-bup-be-t10',function(){
	return "chuc ban xem phim vui ve";
})->name('qbb');

Route::get('do-not-watch-film',function(){
	return "ban chưa đủ tuổi để vào xem";
})->name('cancleFilm');

Route::get('/kt-snt/{number}',function($number){
	return redirect()->route('laSNT');
})->middleware('myCheckSNT');
Route::get('/result-ok',function(){
	return "ok";
})->name('laSNT');
Route::get('/result-fail',function(){
	return "fail";
})->name('notSNT');
Route::get('/demo-Controller','DemoControll@index');
Route::get('/demo-home/{name}/{age}','DemoControll@test')->name('test-controller');
Route::get('/demo-view','TestController@index')->name('homeView');
Route::post('/demo-login','TestController@login')->name('loginForm');
Route::get('/test-request','TestController@test');
Route::get('/about-view','AboutController@index')->name('aboutView');
Route::get('/contact-view','ContactController@index')->name('contactView');
//su dung middleware trong controller
Route::get('/middleware-controller/{user}/{pass}','ExampleController@index')->name('exp');
Route::get('/error-login',function(){
	return "user or pass invalid";
})->name('errorLogin');
Route::get('/info-me','ExampleController@index')->name('info-me');
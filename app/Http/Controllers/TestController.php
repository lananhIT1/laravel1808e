<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
    	//nap view cho ứng dụng
    	//return: response ket qua
    	//view():response về 1 view(chứa mã html)
    	$name='LPHP1808E';
    	$age=20;
    	$address='Ha Noi';
    	$data=[];
    	$data['name']=$name;
    	$data['age']=$age;
    	$data['address']=$address;
    	$data['infoST']=[
    		[
    			'msv'=>113,
    			'name'=>'Nguyen Van A',
    			'age'=>20,
    			'email'=>'nguyenvana@gmail.com',
    			'gender'=>1,
    			'money'=>2000000
    		],
    		[
    			'msv'=>114,
    			'name'=>'Nguyen Van B',
    			'age'=>20,
    			'email'=>'nguyenvanb@gmail.com',
    			'gender'=>0,
    			'money'=>2000000
    		],
    		[
    			'msv'=>115,
    			'name'=>'Nguyen Van C',
    			'age'=>21,
    			'email'=>'nguyenvanc@gmail.com',
    			'gender'=>1,
    			'money'=>2000000
    		]
    	];

    	//truyền biến ra view-truyền biến đơn

    	//return view('test.index')->with('myName',$name);
    	//truyền biến ra ngoài view- truyen 1 mang
    	return view('test.index',$data);
    }
    public function login(Request $request)
    {
    	//đối tượng request lưu các thông tin request từ phía client gửi lên
    	// $username=$request->input("user");
    	$username=$request->user;
    	//var_dump+die
    	dd($username);
    }
    public function test(Request $request){
    	//http://localhost:8000/test-request?q=abc&n=123
    	//injection : Request $request
    	//$p=$request->q;
    	$p=$request->get('q');
    	//$p=$request->input('q','giá trị mặc định nếu ko tồn tại gt q');
    	$p2=$request->m;
    	dd($p,$p2);
    	return  "this is test";
    }
}

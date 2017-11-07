<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function add(){
    	return view('backend.add');
    }
    public function edit(){
    	return view('backend.edit');
    }
    public function admin(){
    	return view('backend.admin');
    }
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
    	$rules = [
    		'users'=>'email',
    		'pass'=>'min:3|max:6'
    	];
    	$message = [
    		'email'=>'email khong hop le',
    		'min'=>'it nhat la 3 ki tu',
    		'max'=>'toi da 6 ki tu',
    	];

    	$validator = Validator::make($request->all(),$rules,$message);
    	if($validator->passes()){
    		$user = $request->input('user');
    		
    		$pass = $request->input('pass');
    		
    		if($user == 'vietpro.edu.vn@gmail.com' && $pass == '123456'){
    			//////////////
    			$alert = ['passes'=>'Dang nhap thanh cong'];
    		}
    		else{
    			$alert = ['error'=>'Tai khoang khong hop le'];
    		}	
    	}
    	else{
    		$alert = ['errors'=>$validator->messages()->all()];
    	}
        return view('backend.login',$alert);
    }
    
}

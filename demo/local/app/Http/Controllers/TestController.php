<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

class TestController extends Controller
{
    public function hello(){
    	$arr = [
    		'nam'=>'Hung',
    		'nu'=>'Tuyet'
    	];
    	return view('test.hello',$arr);
    }
    public function bye($a){
    	echo 'xin chao ban: '.$a;
    }
    public function getForm(){
    	return view('test.form');
    }
    public function getLayout(){
        return view('test.layout',['hello'=>'1']);
        }   
    public function getValidate(){
        return view('test.form');
    }
    // public function postValidate(Request $request){

    //     $rules = ['mail'=>'required|email',
    //              'pass'=>'required|min:3|max:6'
    //     ];

    //     $message = [
    //         'required'=>'Khong duoc de trong',
    //         'email'=>'Email khong hop le',
    //         'min'=>'Khong duoc it hon 3 ki tu',
    //         'max'=>'Khong duoc nhieu hon 6 ki tu'
    //     ];


    //     $validator = Validator::make($request->all(),$rules,$message);
    //     if(!$validator->passes()){
    //         $errors = ['errors'=>$validator->messages()->all()];
    //     }
    //     return view('test.form',$errors);
    // }

    
}


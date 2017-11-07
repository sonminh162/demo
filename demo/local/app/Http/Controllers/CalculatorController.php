<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculator(){
    	return view('calculator.form');
    }
    public function postForm(){
    	switch($_POST['pt']){
    		case '+' : $kq = $_POST['st1'] + $_POST['st2'];break;
    		case '-' : $kq = $_POST['st1'] - $_POST['st2'];break;
    		case '*' : $kq = $_POST['st1'] * $_POST['st2'];break;
    		case '/' : $kq = $_POST['st1'] / $_POST['st2'];break;
    	}
    	return view('calculator.form',['kq'=>$kq]);
    }
}

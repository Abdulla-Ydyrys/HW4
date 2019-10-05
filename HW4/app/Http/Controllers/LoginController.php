<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
        public function show(Request $request){
        	$name = $request -> input('name');
        	$surname = $request -> input('surname');
        	$result =  '<h1>HI! My name is ' . $name . '<br> and surname is ' . $surname . '</h1>';
    		return $result;
        }

    }


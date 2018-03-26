<?php

namespace App\Http\Controllers;

class tryController extends Controller
{
    public function home(){

    	$users = ['try1', 'try2', 'try3'];

    	return view('welcome', compact('users'));
    }

    public function about(){

    	return view('about');
    }

    public function upload (){

    	return view('page view.upload');
    }
}

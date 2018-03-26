<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class postsController extends Controller
{
    public function index(){


    	$posts = DB::table('posts')->get();

    	return view('page view.index');
    }
}

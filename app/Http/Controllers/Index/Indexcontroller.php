<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
        //??
        public function index(){
            //session(['name'=>'zhangsan']);
            return view('index/index');
        }
}

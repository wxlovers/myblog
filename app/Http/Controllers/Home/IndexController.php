<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //博客前台展示页面
    public function index()
    {
        return view('home/index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    // 文章展示页面后台
    public function show()
    {
        return '文章展示';
    }

    public function edit()
    {
        return '文章修改';
    }

    public function create(Request $request)
    {
        if ( $request->isMethod('post') )
        {
            

        }
        else
        {
            return view('admin.article_create');
        }
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($params){
        if($params == 'breaking-news'){
            $title = 'Breaking News';
            $params = 'breaking';
        }else if($params == 'hot-news'){
            $title = 'Hot News';
            $params = 'hot';
        }

        return view('news.'.$params, compact('title'));
    }
}

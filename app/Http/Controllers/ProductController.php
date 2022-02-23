<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($params){
        if($params == 'apple'){
            $title = 'Apple Inc';
            $params = 'apple';
        }else if($params == 'samsung'){
            $title = 'Samsung Inc';
            $params = 'samsung';
        }else{
            $title = 'Xiomi Inc';
            $params = 'xiomi';
        }
        
        return view('products.'.$params, compact('title'));
    }
}

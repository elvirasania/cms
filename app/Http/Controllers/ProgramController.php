<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index($params){
        if($params == 'karir'){
            $title = 'Karir';
            $params = 'karir';
        }else if($params == 'magang'){
            $title = 'Magang';
            $params = 'magang';
        }
        
        return view('program.'.$params, compact('title'));
    }
}

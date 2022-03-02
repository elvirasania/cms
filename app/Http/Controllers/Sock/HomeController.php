<?php

namespace App\Http\Controllers\Sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('app.page.index');
    }
}

<?php

namespace App\Http\Controllers\Sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('app.page.index');
    }

    public function about(){
        return view('app.page.about');
    }

    public function clients(){
        return view('app.page.clients');
    }

    public function contact(){
        return view('app.page.contact');
    }

    public function testimonial(){
        return view('app.page.testimonial');
    }
}

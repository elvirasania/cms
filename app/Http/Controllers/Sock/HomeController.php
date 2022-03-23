<?php

namespace App\Http\Controllers\Sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){
        return view('app.page.index');
    }

    public function about(){
        return view('app.page.about');
    }

    public function clients(){
        $product = Product::all();
        return view('app.page.clients', compact('product'));
    }

    public function contact(){
        return view('app.page.contact');
    }

    public function testimonial(){
        return view('app.page.testimonial');
    }
}

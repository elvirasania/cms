<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        $title = 'About US / Tentang Saya';
        return view('about.index', compact('title'));
    }
}

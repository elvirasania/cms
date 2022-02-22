<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang";
    }

    public function about(){
        echo "NIM     : 2041720080 <br/>
             Nama   : Elvira sania Mufida <br/>
             Kelas  : TI -2G";
    }

    public function articles($id){
        return "ni adalah halaman Artikel dengan Id ke-".$id;
    }
}

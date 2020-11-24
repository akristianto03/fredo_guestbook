<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    
    public function jadwal(){
        return view('jadwal');
    } 

    public function kontak(){
        return view('kontak');
    } 

}

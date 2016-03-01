<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\informasi;
use File;

class InformasiController extends Controller
{
    public function home(){
    	return view('bem.home');
    }
    public function about(){
    	return view('bem.about');
    }
    public function admin(){
    	return view('admin');
    }
    public function tujuan(){
    	return view('bem.tujuan');
    }
}

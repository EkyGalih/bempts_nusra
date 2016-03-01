<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function beranda(){
    	return view('admin.beranda');
    }
    public function agenda(){
    	return view('admin.agenda');
    }
    public function add_agenda(){
    	return view('admin.add_agenda');
    }
}

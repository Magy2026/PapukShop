<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class HomeController extends Controller
{
   public function index(){
   $slides=Slide::all();
   return view('static.home', compact('slides'));
}
}
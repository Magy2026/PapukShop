<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
      return view('static.home');
    }
    public function about()
    {
      return view('static.about');
    }
    public function apranqner()
    {
      return view('static.apranqner');
    }
    public function kap()
    {
      return view('static.kap');
    }
    public function zambyugh()
    {
      return view('static.zambyugh');
    }
    public function submit(ContactRequest $request)
    {
      //$request->validate();
      $message=new Message();
      $message->name=$request->input('name');
      $message->email=$request->input('email');
      $message->subject=$request->input('subject');
      $message->text=$request->input('message');
      $message->save();

      return redirect()->route('home');
    }

}



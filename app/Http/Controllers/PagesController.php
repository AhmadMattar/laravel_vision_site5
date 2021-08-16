<?php

namespace App\Http\Controllers;

use App\Mail\Site5Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function portfolioDetails(){
        return view('portfolio-details');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }

    public function contactSubmit(Request $request){
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'subject' => 'required|min:4|max:50',
            'message' => 'required',
        ]);
        Mail::to('amattar56@gmail.com')->send(new Site5Mail($data));
        return redirect()->route('site5contact');
    }
}

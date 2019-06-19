<?php

namespace App\Http\Controllers;

use App\Link;
use App\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    $links = Link::all();
    $sliders = Slider::all();

    return view('front.layouts.master', compact('links', 'sliders'));
    }




    public function message(Request $request){
        dd($request->all());
    }
}
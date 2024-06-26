<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{ 
    //__index method__// 
    public function index()
    {
        return view('contact');
    }
    public function about_index()
    {
        return response('Hello World!');
    } 

    //Countery Method
    public function countery()
    {
        return response('Hello World!');
    }
    
    //__Student store__//
    public function Studentstore(Request $request){
        dd($request->collect());
    }
     
}

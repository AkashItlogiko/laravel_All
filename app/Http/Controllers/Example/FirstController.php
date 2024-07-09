<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\URL;

class FirstController extends Controller
{ 
    //__index method__//  
    public function index()
    {
        return view('contact');
    }
    public function about_index()
    {
        return view('about');
    } 



    //Countery Method
    public function countery()
    {
 return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
    }
    
    //__Student store__//
    public function Studentstore(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

    //    return redirect()->action([SecondController::class,'test']);
    return redirect()->back()->with('success','Student Inserted!');
    }
     
//_Store contact
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:55',
        'email' => 'required|max:80|email',
        'password' => 'required|min:6|max:12',
    ]);
        dd($request->all());
} 

//Laravel Method 
// public function laravel()
// {
 
// return View('page.laravel ', ['name' => 'Bangladesh ']);
 

// }


}

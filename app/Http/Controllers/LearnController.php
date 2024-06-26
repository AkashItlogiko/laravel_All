<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //_Data collect from database__//

        return "This is your invoke Method!";
    }
    public function hello(){
        return "Hello";
    }
}

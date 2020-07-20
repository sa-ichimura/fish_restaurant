<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    //
    public function index(Request $request)
    {
       
        $getComponentSessions=$request->session()->get('food/comparsion');
        return view('comparison/index',[
            'test'=>$getComponentSessions
        ]);
    }
}

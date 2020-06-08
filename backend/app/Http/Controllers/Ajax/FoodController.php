<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function index(){
        return \App\Model\Food::all();
    }

    public function search(Request $request)
    {
        $searchWord = $request->input('request');
        if(!empty($searchWord)){
            $query->where('name','LIKE',"%{$searchWord}%")
            ->where('material','LIKE',"%{$searchWord%")
            ->where('target','LIKE',"%{$searchWord}%");
        }

        $foods = $query->get();
        return view('food.show','foods'=>$foods);


    }
}

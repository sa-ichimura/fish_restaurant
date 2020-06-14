<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele\Food;
use App\Model\FoodCategory;

class FoodCategoeyController extends Controller
{
    public function index(Request $request){
        $foodCategoryId = $request->input('id');
        $foodCategory = FoodCategory::find($foodCategoryId);
        $foods = $foodCategory->foods;
        return view('foodCategory/index',[
            'foods'=>$foods
        ]);
    }
}

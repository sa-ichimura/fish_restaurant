<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodCategory;
use App\Model\FoodComponent;
use App\Model\Food;

class FoodComponentController extends Controller
{
    public function index(Request $request)
    {
        
        $foodId = $request->input('food_id');
        $food = Food::find($foodId);       
        $foodComponent = FoodComponent::where('food_id',$foodId)->get();
     
        return view('foodComponent/index',[
            'food'=>$food,
            'foodComponent'=>$foodComponent
        ]);
    }

}

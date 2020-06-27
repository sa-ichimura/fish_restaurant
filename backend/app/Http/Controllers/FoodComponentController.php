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
        $foodComponents = FoodComponent::where('food_id',$foodId)->get();
        foreach($foodComponents as $foodComponent){
            $foodComponentId = $foodComponent->id;
        }
        
     
        return view('foodComponent/index',[
            'food'=>$food,
            'foodComponents'=>$foodComponents,
            'foodComponentId'=>$foodComponentId
  
        ]);
    }
}

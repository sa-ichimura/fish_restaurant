<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodCategory;
use App\Model\FoodComponent;

class FoodComponentController extends Controller
{
    public function index(Request $request)
    {
        
        $foodCategoryId = $request->input('id');
        $foodCategory = FoodCategory::find($foodCategoryId);
        foreach($foodCategory->foods as $food){
            dump($food->id);
            $foodComponent = FoodComponent::find($food->id);
        }
     
        return view('foodComponent/index');
    }

}

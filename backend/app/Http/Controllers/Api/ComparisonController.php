<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modele\Food;
use App\Model\FoodComponent;


class ComparisonController extends FoodComponentController
{
    public function index(Request $request)
    {
        /*
        $foodComponent = FoodComponent::where('food_id',$request->id)->get();
        $data = $this->componentJson($foodComponent);
        return $data;
        */
    }

    public function create(Request $request)
    {
        
    }


    public function edit()
    {

    }


    public function delete()
    {

    }
}

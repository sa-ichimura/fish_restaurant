<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodCategory;
use App\Model\FoodComponent;
use App\Model\Food;
use App\Model\Comparison;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FoodComponentController extends Controller
{
    public function index(Request $request)
    {
        $comparisonComent = '0';
        $userId = 0;
        $foodId = $request->input('food_id');
        $food = Food::find($foodId);       
        $foodComponents = FoodComponent::where('food_id',$foodId)->get();
        
        foreach($foodComponents as $foodComponent){
            $foodComponentId = $foodComponent->id;
        }

        $graphData = $this->componentJson($foodComponents);

        if(Auth::check()){
            $userId = Auth::id();
            $comparison = Comparison::where('user_id',$userId)->where('food_id',$foodId)->get();
            if(count($comparison) !=0){
                $comparisonComent = '1';
            }
               
        }
        return view('foodComponent/index',[
            'food'=>$food,
            'foodComponents'=>$foodComponents,
            'foodComponentId'=>$foodComponentId,
            'graphData'=>$graphData,
            'userId'=>$userId,
            'comparisonComent'=>$comparisonComent
        ]);
    }
    /**
     * 
     */
    public function componentJson($foodComponents=null)
    {
        $convetArray = [];
        foreach($foodComponents as $foodComponent){
            $convetArray[]= [
                $foodComponent->protein,
                $foodComponent->fat,
                $foodComponent->fiber,
                $foodComponent->mineral,
                $foodComponent->moisture,
                $foodComponent->rin,
                $foodComponent->other
            ];
        }
        return $this->componentConvet($convetArray);
        
    }

    public function componentConvet(array $convetArray)
    {
        foreach($convetArray as $value){
            foreach($value as $key=>$convert){
                $text = trim(mb_convert_kana($convert, 'as', 'UTF-8'));
                $componentValue[] = floatval(preg_replace('/[^0-9a-zA-Z-.]/', '', $text));
                $componentKey[]=$key;
            }
            $componentTotal = array_sum($componentValue);
            $componentValue[6]=floatval(strval(100-$componentTotal));
            $componentData[]=array_combine($componentKey,$componentValue);
        }
        return $componentData;
    }






}

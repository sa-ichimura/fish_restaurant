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
     
        $componentConvet = $this->componentJson($foodComponent);
    
        dump($componentConvet);
        return view('foodComponent/index',[
            'food'=>$food,
            'foodComponents'=>$foodComponent,
            'pieDate'=>$componentConvet
        ]);
    }

    public function componentJson($foodComponents=null)
    {
        $convetArray = [];
        foreach($foodComponents as $foodComponent){
            
            $convetArray[] = $foodComponent->protein;
            $convetArray[] = $foodComponent->fat;
            $convetArray[] = $foodComponent->fiber;
            $convetArray[] = $foodComponent->mineral;
            $convetArray[] = $foodComponent->moisture;
            $convetArray[] = $foodComponent->rin;
            $convetArray[] = $foodComponent->other;
        }
       

        return $this->componentConvet($convetArray);
        
    }

    public function componentConvet(array $convets){
        foreach($convets as $convert){
            $text = trim(mb_convert_kana($convert, 'as', 'UTF-8'));
            $utf8Delete[] = floatval(preg_replace('/[^0-9a-zA-Z-.]/', '', $text));
        }

        $componentTotal = array_sum($utf8Delete);
        $utf8Delete[6]=floatval(strval(100-$componentTotal));
    
        return json_encode($utf8Delete);
    }

}

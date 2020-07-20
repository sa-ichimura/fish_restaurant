<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FoodCategory;
use App\Model\FoodComponent;
use App\Model\Food;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FoodComponentController extends Controller
{
    public function index(Request $request)
    {
        $graphSessionFlag = '未登録';
        $foodId = $request->input('food_id');
        $food = Food::find($foodId);       
        $foodComponents = FoodComponent::where('food_id',$foodId)->get();
        foreach($foodComponents as $foodComponent){
            $foodComponentId = $foodComponent->id;
        }

        $graphData = $this->componentJson($foodComponents);

        $sessionKey = 'graph';
        $value = $request->session()->all();
        if(!isset($value[$foodId])){
            $graphSessionFlag = '登録済み';
        }
        $user_id = Auth::id();
        
        return view('foodComponent/index',[
            
            'food'=>$food,
            'foodComponents'=>$foodComponents,
            'foodComponentId'=>$foodComponentId,
            'graphData'=>$graphData,
            'graphSessionFlag' => $graphSessionFlag,
            'userId'=>$user_id
        ]);
    }

    public function componentJson($foodComponents=null)
    {
        $convetArray = '';
        foreach($foodComponents as $foodComponent){
            $convetArray= [
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

    public function componentConvet(array $convetArray){

        foreach($convetArray as $key=>$convert){
            $text = trim(mb_convert_kana($convert, 'as', 'UTF-8'));
            $componentValue[] = floatval(preg_replace('/[^0-9a-zA-Z-.]/', '', $text));
            $componentKey[]=$key;
        }
        $componentTotal = array_sum($componentValue);
        $componentValue[6]=floatval(strval(100-$componentTotal));
        $componentData=array_combine($componentKey,$componentValue);
        
        return json_encode($componentData);
    }



    public function comparison(Request $request)
    {
        $foodId = $request->input('food_id');
        $food = Food::find($foodId);       
        $foodComponents = FoodComponent::where('food_id',$foodId)->get();
        $componentArray =[];
        foreach($foodComponents as $foodComponent){
            $foodComponentId = $foodComponent->id;
            $componentArray = [
                $foodComponentId,
                $foodComponent->protein,
                $foodComponent->fat,
                $foodComponent->fiber,
                $foodComponent->mineral,
                $foodComponent->moisture,
                $foodComponent->rin,
                $foodComponent->other
            ];

            $getComponentSessions=$request->session()->get('food/comparsion');
            if(isset($getComponentSessions)){
                dump($request->session()->get('food/comparsion'));
                foreach($getComponentSessions as $getComponentSession){
                    if($getComponentSession[0] != $foodComponentId){
                        $request->session()->push('food/comparsion', $componentArray);
                        $request->session()->flash('message', '登録したでござる');
                    }else{
                        $request->session()->flash('message', 'すでに登録済みでござる');
                    }
                }
            }else{
                $request->session()->push('food/comparsion', $componentArray);
                $request->session()->flash('message', '登録したでござる');
            }  
        }

        
        return view('foodComponent/index',[
            'food'=>$food,
            'foodComponents'=>$foodComponents,
            'foodComponentId'=>$foodComponentId
        ]);

    }
}

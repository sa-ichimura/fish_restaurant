<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FoodComponent;
use App\Model\Comparison;
use Illuminate\Support\Facades\Auth;


class FoodComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $foodComponent = FoodComponent::where('food_id',$request->id)->get();
        $data = $this->componentJson($foodComponent);
        return $data;
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comparisonSession(Request $request)
    {
        //
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$foodId,$user_id)
    {
        $foodComponent = Comparison::where('food_id',$foodId)->where('user_id',$user_id)->get();

        //データが取得できなければinsert
       if(isset($foodComponent)){
            $comparison = new Comparison();
            $comparison->food_id = $foodId;
            $comparison->user_id=$user_id;
            $comparison->save();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

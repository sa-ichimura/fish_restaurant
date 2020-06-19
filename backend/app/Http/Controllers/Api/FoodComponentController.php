<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FoodComponent;

class FoodComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $foodComponent = FoodComponent::where('food_id',1)->get();
        $data = $this->componentJson($foodComponent);
        
        return $data;
        
    }
    public function componentJson($foodComponents=null)
    {
        $convetArray = '';
        foreach($foodComponents as $foodComponent){
            $convetArray= [
                'protein'=>$foodComponent->protein,
                'fat' => $foodComponent->fat,
                'fiber' => $foodComponent->fiber,
                'mineral' => $foodComponent->mineral,
                'moisture' => $foodComponent->moisture,
                'rin' => $foodComponent->rin,
                'other' => $foodComponent->other
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
    public function store(Request $request)
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
    public function update(Request $request, $id)
    {
        //
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

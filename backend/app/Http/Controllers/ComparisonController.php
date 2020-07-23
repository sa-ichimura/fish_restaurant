<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Comparison;
use App\Model\FoodComponent;
use App\Model\Food;
use App\User;

class ComparisonController extends Controller
{
    //
    public function index(Request $request)
    {
        $foodComponents = [];
        $comparisons = User::find(Auth::id())->comparisons;

        foreach($comparisons as $comparison){
            $foodComponents[] = FoodComponent::find($comparison->food_id);
            $foods[] = Food::find($comparison->food_id);
        }
       
        $FoodComponentController = app()->make('App\Http\Controllers\FoodComponentController');
        $graphDatas = $FoodComponentController->componentJson( $foodComponents );


        foreach($foodComponents as $key =>$foodComponent){
            $componentGraphDatas[$key]['foodComponent'] = $foodComponent;
            $componentGraphDatas[$key]['graphData'] =  $graphDatas[$key]; 
            $componentGraphDatas[$key]['food'] =  $foods[$key]; 


        }
        dump($componentGraphDatas);

        return view('comparison/index',[
            'graphDatas'=>$graphDatas,
            'foodComponents'=>$foodComponents,
            'componentGraphDatas'=>$componentGraphDatas
        ]);
    }


    


}

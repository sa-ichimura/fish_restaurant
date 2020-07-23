<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FoodComponent;
use App\Model\Comparison;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FoodComponentController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$foodId,$user_id)
    {
        $Comparison = Comparison::where('food_id',$foodId)->where('user_id',$user_id)->get();
        //データが取得できなければinsert
       if(count($Comparison) == 0){
            $comparison = new Comparison();
            $comparison->food_id = $foodId;
            $comparison->user_id=$user_id;
            $comparison->save();
            return ['insert'=>true];
        }else{
            return ['insert'=>false];
            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$user,$food)
    {
        $deletedRows = Comparison::where('user_id', $user)->where('food_id',$food)->delete();
    
    }
}

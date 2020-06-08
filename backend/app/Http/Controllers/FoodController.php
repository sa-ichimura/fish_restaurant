<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FishCategory;
use App\Model\foodCategory;
use App\Model\food;


class FoodController extends Controller
{
    //
    public function index(Request $request)
    {
        $fishCategories = \App\Model\FishCategory::All();
        foreach($fishCategories as $fishCategory){    
            $foodCategories[$fishCategory->id]=\App\Model\FoodCategory::where('fish_category_id', $fishCategory->id)->get();
        }
        return view('food/index',[
                'foodCategories'=>$foodCategories,
                'fishCategories'=>$fishCategories
                ]);
    }
    public function show()
    {

    }

    public function search()
    {
        
         
    }
}

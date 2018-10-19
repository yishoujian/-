<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        //得到所有数据
        $foods=Food::paginate(2);
        //显示视图
        return view("food.index",compact("foods"));

    }


    public function add(Request $request)
    {
        if ($request->isMethod("post")){
            $this->validate($request,[
               "name"=>"required",
               "money"=>"required",
            ]);
            if (Food::create($request->post())){
                session()->flash("success","添加成功");
                return view("food.index");
            }
        }else{
            return view("food.add");
        }

    }
}

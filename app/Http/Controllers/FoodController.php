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
//        dd($foods);
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
                return redirect()->route("food.index");
             }
        }else{
            return view("food.add");
        }

    }


    public function edit(Request $request,$id)
    {
        //找到数据
        $food=Food::find($id);
        if ($request->isMethod("post")){
                //接收参数
            $data=$request->post();
            if ($food->update($data)){
                session()->flash("success","编辑成功");
                return redirect()->route("food.index");
            }
        }else{
            return view("food.edit",compact("food"));
        }

    }


    public function del(Request $request,$id)
    {
        if (Food::find($id)->delete()){
            session()->flash("success","删除成功");
            return redirect()->route("food.index");
        }

    }
}

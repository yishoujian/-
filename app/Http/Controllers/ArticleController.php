<?php

namespace App\Http\Controllers;
use App\Models\article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //首页
    public function index()
    {

        $articles=Article::paginate(2);
       return view("/article/index",compact("articles"));

    }

    //添加
    public function add(Request $request)
    {
        //得到分类信息
        $acs=ArticleCategory::all();
       //dd($acs);
        if ($request->isMethod("post")){

            $this->validate($request,[
               'title'=>'required|max:10|',
               'content'=>'required|min:2',
                'category_id'=>'required'
            ]);
            //接收参数
            $data=$request->post();
            if (Article::create($data)){
                return redirect()->route("article.index");
            }

        }else{
            return view("article.add",compact("acs"));
        }

    }


    //编辑
    public function edit(Request $request,$id)
    {
        //得到分类信息
        $acs=ArticleCategory::all();
        $article=Article::find($id);
//        dd($acs);
        if ($request->isMethod("post")){
//            dd($request->post());
            if ($article->update($request->post())){}
            return redirect()->route("article.index");

        }else{
           return view("article.edit",compact("article","acs"));
        }

    }



    //删除
    public function del(Request $request,$id)
    {
        if (Article::find($id)->delete()){
            return redirect()->route("article.index");
        }

    }



    //关于我们
    public function about()
    {
        return view("article.about");

    }


    //帮助
    public function help()
    {
        return view("article.help");

    }


}

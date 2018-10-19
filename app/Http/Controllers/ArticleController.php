<?php

namespace App\Http\Controllers;
use App\Models\article;
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
        if ($request->isMethod("post")){

            $this->validate($request,[
               'title'=>'required|max:10|',
               'content'=>'required|min:2',
            ]);
            //接收参数
            $data=$request->post();
            if (Article::create($data)){
                return redirect()->route("article.index");
            }

        }else{
            return view("article.add");
        }

    }


    //编辑
    public function edit(Request $request,$id)
    {
        $article=Article::find($id);
//        dd($article);
        if ($request->isMethod("post")){
            if ($article->update($request->post())){}
            return redirect()->route("article.index");

        }else{
           return view("article.edit",compact("article"));
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

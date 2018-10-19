<?php

namespace App\Http\Controllers;

use App\models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //得到所有数据
        $books=Book::paginate(3);
        return view("book.index",compact("books"));

    }

    public function add(Request $request)
    {
        if ($request->isMethod("post")){

            $this->validate($request,[
               'name'=>"required|min:2" ,
               'content'=>"required|min:2" ,
            ]);
          //得到数据
            $data=$request->post();

            if (Book::create($data)){
                session()->flash("success","添加成功");
                return redirect()->route("book.index");
            }
        }else{
           return view("book.add");
        }

    }

    public function edit(Request $request,$id)
    {
        $book=Book::find($id);
        if ($request->isMethod("post")){
            if ($book->update($request->post())){
                return redirect()->route("book.index");
            }
        }else{
            return view("book.edit",compact("book"));
        }

    }


    public function del(Request $request,$id)
    {
       if (Book::find($id)->delete()){
           return redirect()->route("book.index");
       }

    }
}

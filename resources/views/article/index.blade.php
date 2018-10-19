

@extends("layouts.main")
@section("title",'博客首页')
@section("content")

   <a href="{{route("article.add")}}" class="btn btn-warning">添加</a>
   <table class="table table-striped">
       <tr>
           <th>id</th>
           <th>标题</th>
           <th>内容</th>
           <th>操作</th>
       </tr>
       @foreach($articles as $article)
       <tr>
           <td>{{$article->id}}</td>
           <td>{{$article->title}}</td>
           <td>{{$article->content}}</td>
           <td>
               <a href="{{route("article.edit",$article->id)}}" class="btn btn-success">编辑</a>
               <a href="{{route("article.del",$article->id)}}" class="btn btn-danger">删除</a>
           </td>
       </tr>
           @endforeach
   </table>
    {{$articles->links()}}
@endsection
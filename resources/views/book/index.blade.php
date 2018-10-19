@extends("layouts.main");
@section("title","小说")
@section("content")

 <a href="{{route('book.add')}}" class="btn btn-success">添加</a>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>内容</th>
            <th>操作</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->content}}</td>
            <td>
                <a href="{{route("book.edit",$book->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("book.del",$book->id)}}" class="btn btn-danger">删除</a>
            </td>

        </tr>
        @endforeach

    </table>


 {{$books->links()}}
    @endsection

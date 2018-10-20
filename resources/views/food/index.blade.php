@extends("layouts.main");
@section("title","小说")
@section("content")

 <a href="{{route("food.add")}}" class="btn btn-success">添加</a>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>价格</th>
            <th>简介</th>
            <th>操作</th>
        </tr>
       @foreach($foods as $food)
        <tr>
            <td>{{$food->id}}</td>
            <td>{{$food->name}}</td>
            <td>{{$food->money}}</td>
            <td>{{$food->intro}}</td>
            <td>
                <a href="{{route("food.edit",$food->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("food.del",$food->id)}}" class="btn btn-danger">删除</a>
            </td>

        </tr>
        @endforeach

    </table>
    {{$foods->links()}}



    @endsection



@extends("layouts.main")
@section("title",'博客首页')
@section("content")
    <form class="form-inline" method="post" action="{{route("book.add")}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName2">名字</label>
            <input type="text" class="form-control"  name="name" id="exampleInputName2"
                   value="{{old("name")}}"
                   placeholder="请输入标题">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">内容</label>
            <input type="text" class="form-control" name="content" id="exampleInputEmail2"    value="{{old("content")}}"
                   placeholder="请加入内容">
        </div>
        <button type="submit" class="btn btn-warning">添加</button>
    </form>
@endsection
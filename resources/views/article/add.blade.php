

@extends("layouts.main")
@section("title",'博客首页')
@section("content")
    <form class="form-inline" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName2">标题</label>
            <input type="text" class="form-control"  name="title" id="exampleInputName2" placeholder="请输入标题">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">内容</label>
            <input type="text" class="form-control" name="content" id="exampleInputEmail2" placeholder="请加入内容">
        </div>
        <button type="submit" class="btn btn-warning">添加</button>
    </form>
@endsection
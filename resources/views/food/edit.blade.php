

@extends("layouts.main")
@section("title",'博客首页')
@section("content")
    <form class="form-inline" method="post" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName2">名字</label>
            <input type="text" class="form-control"   value="{{$food->name}}" name="name" id="exampleInputName2" placeholder="请输入标题">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">价格</label>
            <input type="text" class="form-control"  value="{{$food->money}}"  name="money" id="exampleInputEmail2" placeholder="价格">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">简介</label>
            <input type="text" class="form-control"  value="{{$food->intro}}"  name="intro" id="exampleInputEmail2" placeholder="价格">
        </div>
        <button type="submit" class="btn btn-warning">编辑</button>
    </form>
@endsection
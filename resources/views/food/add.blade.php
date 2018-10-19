

@extends("layouts.main")
@section("title",'博客首页')
@section("content")
    <form class="form-inline" method="post" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName2">名字</label>
            <input type="text" class="form-control"  name="name" id="exampleInputName2"
                   value="{{old("name")}}"
                   placeholder="请输入名字">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">价格</label>
            <input type="text" class="form-control" name="money" id="exampleInputEmail2"    value="{{old("money")}}"
                   placeholder="请加入价格">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">简介</label>
            <input type="text" class="form-control" name="intro" id="exampleInputEmail2"    value="{{old("intro")}}"
                   placeholder="请加入简介">
        </div>
        <button type="submit" class="btn btn-warning">添加</button>
    </form>
@endsection
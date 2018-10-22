<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route("article.index")}}">首页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route("article.index")}}">小说列表<span class="sr-only">(current)</span></a></li>
                <li><a href="{{route("article_category.index")}}">文章分类</a></li>
                <li class="active"><a href="{{route("goods.index")}}">商品列表<span class="sr-only">(current)</span></a></li>
                <li><a href="{{route("goods_category.index")}}">商品分类</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>



            @auth("admin")

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            欢迎:{{\Illuminate\Support\Facades\Auth::guard("admin")->user()->username}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route("admin.logout")}}">退出登录</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth

            @guest("admin")

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route("admin.index")}}">用户列表</a></li>
                    <li><a href="{{route("admin.reg")}}">注册</a></li>
                    <li><a href="{{route("admin.login")}}">登录</a></li>
                </ul>
            @endguest





















        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

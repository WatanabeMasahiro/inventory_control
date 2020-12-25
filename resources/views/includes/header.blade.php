<body>
    <div class="container-fluid header">    <!-- header -->

        <div class="siteTitle text-center">
            <h1 class="siteTitle mt-4 pb-1"><a href="/inventory_control" style="text-decoration: none;"><b class="text-success"><i class="fas fa-boxes mr-3"></i>在庫管理くん<i class="fas fa-boxes ml-3"></i></b></a></h1>
        </div>

        <hr class="w-75 pb-0 mb-0">

        <div class="row">
            <div class="col-2"></div>

            <div class="col-3 userName">
                <div class="text-center">
                    @if (Auth::check())
                    <p class="text-muted userInfo">　<i class="fa fa-user h4" aria-hidden="true"></i> 『　{{$user -> name}}　』さん　</p>
                    @else
                    <p class="text-muted userInfo">　<a href="/register">ユーザー登録</a>　</p>
                    @endif
                </div>
            </div>

            <div class="col-2"></div>

            <div class="col-3 mt-4"><a class="" href="">ログアウト</a> / <a class="" href="">退会</a></div>

            <div class="col-2"></div>
        </div>

        <hr class="pt-0 mt-0">

    </div>                                  <!-- /header -->
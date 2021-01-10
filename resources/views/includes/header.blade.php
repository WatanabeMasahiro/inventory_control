<body>
    <div class="container header">    <!-- header -->


        <div class="siteTitle text-center">
            <h1 class="siteTitle mt-4 pb-1"><a href="/inventory_control" style="text-decoration: none;">
                <b class="text-success"><i class="fas fa-boxes mr-3"></i>在庫管理くん<i class="fas fa-boxes ml-3"></i></b>
            </a></h1>
        </div>

        <hr class="w-75 pb-0 mb-0">

        <div class="">
            
            <div class="d-block userName text-center">
                @if (Auth::check())
                <p class="text-muted userInfo_M pt-2 pb-1">　<b><i class="fa fa-user h4" aria-hidden="true"></i> 『　{{$user -> name}}　』さん</b>　</p>
                @else
                <p class="text-muted userInfo_M p-2">　<a href="/register"><b>ユーザー登録</b></a>　</p>
                @endif
            </div>

            <div class="text-center d-block my-2 pt-2">
                <a id="logout-link" class="logout-links" href="{{ route('logout') }}">{{ __('ログアウト') }}</a> / <a class="" href="/inventory_control/withdrawal">退会</a>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>

        <hr class="pt-0 mt-0">

    </div>                                  <!-- /header -->


    @foreach($userInfo as $info)
        @if ( $info->id == $user->id )
            @php
                $counter = $info->stocks_count;
            @endphp
            @break
        @endif
    @endforeach

    <div class="ml-5">
        <p class="text-muted d-inline">登録データ数：
            <div id="userInfoCount" class="text-muted d-inline">
                {{ $counter }}
            </div>
        </p>
    </div>
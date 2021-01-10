@include('includes.head')

@include('includes.header')


    <div class="container mainContents">    <!-- mainContents -->

        <div class="text-center mt-4 mb-5">
            <a class="btn btn-lg btn-primary" href="/inventory_control/data_register" role="button">データ登録</a>
        </div>


        @error('numbers')
        <div class="row flashingWarning mt-0 mb-5">
            <div class="col-1"></div>
            <div class="col w-75">
                <p class="bg-warning text-danger text-center">個数を入力するか、9999以下の数にして下さいっ！</p>
            </div>
            <div class="col-1"></div>
        </div>
        @enderror


        @foreach($userInfo as $info)
            @if ( $info->id == $user->id )
                @php
                    $counter = $info->stocks_count;
                @endphp
                @break
            @endif
        @endforeach

        @if($counter == 0)
        <div class="text-center h4">登録データがありません。</div>
        @else
        <table class="noset-table table table-hover table-dark recordTable">
            <thead>
                <tr class="text-center">
                    <th><a href="/inventory_control?sort=category">カテゴリー</a></th>
                    <th><a href="/inventory_control?sort=goods">品　物</a></th>
                    <th><a href="/inventory_control?sort=numbers">個　数</a></th>
                    <th><a href="/inventory_control?sort=remarks">備　考</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stockData as $stock)
                <tr class="recordData table-secondary text-dark">
                    <td class="text-center align-middle">
                        <div class="sendLink d-none">{{$stock->id}}</div>
                        {{Str::limit( $stock->category, 14 )}}
                    </td>
                    <td class="text-center align-middle">
                        {{Str::limit( $stock->goods, 14 )}}
                    </td>
                    <td class="text-center w-25 align-middle">
                        <form action="/inventory_control" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{$stock->id}}">
                            <input name="numbers" type="number" value="{{$stock->numbers}}" class="pl-3 my-1 text-center w-75">
                            <input type="submit" value="送信" class="my-1">
                        </form>
                    </td>
                    <td class="px-3 align-middle">
                        <pre>{{Str::limit( $stock->remarks, 40 )}}</pre>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif


        <div class="paginate d-sm-none d-flex justify-content-center my-5 pagination-lg">{{ $stockData->appends(['sort' => $sort])->links('vendor.pagination.bootstrap-4') }}</div>   <!-- Mobile_paginate-->

        <div class="paginate d-none d-sm-flex justify-content-center my-5">{{ $stockData->appends(['sort' => $sort])->links('vendor.pagination.bootstrap-4') }}</div>   <!-- NotMobile_paginate-->


    </div>                                  <!-- /mainContents -->

@include('includes.footer')
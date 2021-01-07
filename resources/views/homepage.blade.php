@include('includes.head')

@include('includes.header')


    <div class="container mainContents">    <!-- mainContents -->

        <div class="text-center">
            <a class="btn btn-lg btn-primary my-4" href="/inventory_control/data_register" role="button">データ登録</a>
        </div>

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
                        {{$stock->category}}
                    </td>
                    <td class="text-center align-middle">{{$stock->goods}}</td>
                    <td class="text-center w-25 align-middle">
                        <form action="/inventory_control" method="POST" class="">
                            @csrf
                            <input type="number" class="pl-3 my-1 text-center" value="{{$stock->numbers}}">
                            <input type="submit" value="送信" id="" class="my-1">
                        </form>
                    </td>
                    <td class="px-3 align-middle"><pre>{{$stock->remarks}}</pre></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginate d-flex justify-content-center my-5">{{ $stockData->appends(['sort' => $sort])->links('vendor.pagination.bootstrap-4') }}</div>

    </div>                                  <!-- /mainContents -->

@include('includes.footer')
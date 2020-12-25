@include('includes.head')

@include('includes.header')

    <div class="container mainContents">    <!-- mainContents -->

        <div class="text-center">
            <a class="btn btn-lg btn-primary my-4" href="/register" role="button">データ登録</a>
        </div>

        <table class="noset-table table table-hover table-dark recordTable">
            <thead>
                <tr class="text-center">
                    <th>カテゴリー</th><th>品　物</th><th>個　数</th><th>備　考</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-secondary text-dark recordData">
                    <td class="text-center align-middle">生活用品</td>
                    <td class="text-center align-middle">洗剤</td>
                    <td class="text-center w-25 align-middle">
                        <form action="" method="POST" class="">
                            <input type="number" class="my-1 text-center" value="">
                            <input type="submit" value="送信" id="" class="my-1">
                        </form>
                    </td>
                    <td class="text-center align-middle">週１コ消費。（火）に必ず買い足すこと。</td>
                </tr>
                <tr class="table-secondary recordData">
                    <td></td>
                    <td class="text-center"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p class="text-center my-5">ここにページネーション</p>

    </div>                                  <!-- /mainContents -->

@include('includes.footer')
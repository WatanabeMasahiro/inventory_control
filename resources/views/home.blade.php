<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>在庫管理くん</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('/favicon.search.ico') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

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

    <hr>

    <div class="container-fluid footer">          <!-- footer -->

        <div class="row justify-content-center">
            <p class="mt-3">Copyright - M-Watanabe, 2020.</p>
        </div>

    </div>                                  <!-- /footer -->

    <hr>

</body>
</html>
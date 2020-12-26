@include('includes.head')

@include('includes.header')


        <div class="subTitle_3 text-center d-block d-sm-none my-5">
            <h2 class="subTitle_2 text-center text-dark pb-2 mb-2"><b>更　新　・　削　除</b></h2>
        </div>

        <div class="subTitle_3 text-center d-none d-sm-block my-5">
            <h2 class="subTitle_2 text-center text-dark pb-2 mb-2"><b>更　新　・　削　除</b></h2>
        </div>


        <div class="container mainContents text-center border border-primary rounded w-75 px-0">    <!-- mainContents -->

            <form action="post" class="my-3">

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <p class=""><b>カテゴリー</b></p>
                        <input name="category" type="text" class="px-2 py-1">
                    </div>

                    <div class="col-md-4 mt-4">
                        <p class=""><b>品　物</b></p>
                        <input name="goods" type="text" class="px-2 py-1">
                    </div>

                    <div class="col-md-4 mt-4">
                        <p class=""><b>個　数</b></p>
                        <input name="numbers" type="number" value="0" class="text-center pl-3 py-1">
                    </div>
                </div>

                <div class="mt-5">
                    <p class=""><b>備　考</b></p>
                    <textarea name="remarks" cols="40" rows="10" class="p-2"></textarea>
                </div>

                <div class="text-center my-4 mb-5">
                    <a href="" class="d-inline-block btn btn-lg btn-warning mr-4 px-4">更　新</a>
                    <a href="" class="d-inline-block btn btn-lg btn-danger ml-4 px-4">削　除</a>
                </div>

            </form>

        </div>                                  <!-- /mainContents -->


@include('includes.footer')
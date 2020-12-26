@include('includes.head')

@include('includes.header')

    <div class="container mainContents text-center border border-primary rounded w-75">    <!-- mainContents -->

        <form action="post" class="my-3">

            <div class="row">
                <div class="col-md-4 mt-4">
                    <p class="">カテゴリー</p>
                    <input name="category" type="text" class="px-2 py-1">
                </div>

                <div class="col-md-4 mt-4">
                    <p class="">品　物</p>
                    <input name="goods" type="text" class="px-2 py-1">
                </div>

                <div class="col-md-4 mt-4">
                    <p class="">個　数</p>
                    <input name="numbers" type="number" value="0" class="text-center pl-3 py-1">
                </div>
            </div>

            <div class="mt-5">
                <p class="">備　考</p>
                <textarea name="remarks" cols="40" rows="10" class="p-2"></textarea>
            </div>

            <input type="submit" value="送信" class="my-3 px-5 btn btn-secondary btn-lg">

        </form>

    </div>                                  <!-- /mainContents -->

@include('includes.footer')
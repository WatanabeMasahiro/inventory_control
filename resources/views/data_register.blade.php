@include('includes.head')

@include('includes.header')


    <div class="subTitle_1 text-center my-5">
        <h2 class="subTitle_1 text-center text-dark pb-2 mb-2"><b>登　録　画　面</b></h2>
    </div>


    <div class="container mainContents text-center border border-primary rounded w-75 px-0">    <!-- mainContents -->


    <div class="flashingWarning mt-4">

        @error('category')
        <div class="row">
            <div class="col-1"></div>
            <div class="col w-75">
                <p class="bg-warning text-danger text-center">カテゴリーの文字数を少なくして下さいっ！</p>
            </div>
            <div class="col-1"></div>
        </div>
        @enderror

        @error('goods')
        <div class="row">
            <div class="col-1"></div>
            <div class="col w-75">
                <p class="bg-warning text-danger text-center">品物を入力するか、文字数を少なくして下さいっ！</p>
            </div>
            <div class="col-1"></div>
        </div>
        @enderror

        @error('numbers')
        <div class="row">
            <div class="col-1"></div>
            <div class="col w-75">
                <p class="bg-warning text-danger text-center">個数を入力するか、9999以下の数にして下さいっ！</p>
            </div>
            <div class="col-1"></div>
        </div>
        @enderror

        @error('remarks')
        <div class="row">
            <div class="col-1"></div>
            <div class="col w-75">
                <p class="bg-warning text-danger text-center">備考の文字数を少なくして下さいっ！</p>
            </div>
            <div class="col-1"></div>
        </div>
        @enderror

    </div>


        <form action="/inventory_control/data_register" method="post" class="my-3">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <p class=""><b>カテゴリー</b></p>
                    <input name="category" type="text" value="{{old('category')}}" placeholder="{{old('category')}}" class="text-center px-2 py-1">
                </div>

                <div class="col-md-4 mt-4">
                    <p class=""><b>品　物</b></p>
                    <input name="goods" type="text" value="{{old('goods')}}" placeholder="{{old('goods')}}" class="text-center px-2 py-1">
                </div>

                <div class="col-md-4 mt-4">
                    <p class=""><b>個　数</b></p>
                    <input name="numbers" type="number" value="{{old('numbers')}}" placeholder="{{old('numbers')}}" class="text-center pl-3 py-1">
                </div>
            </div>

            <div class="mt-5">
                <p class=""><b>備　考</b></p>
                <textarea name="remarks" placeholder="{{old('remarks')}}" cols="40" rows="10" class="p-2">{{old('remarks')}}</textarea>
            </div>

            <input type="submit" value="送信" class="my-3 px-5 btn btn-secondary btn-lg">

        </form>

    </div>                                  <!-- /mainContents -->

@include('includes.footer')
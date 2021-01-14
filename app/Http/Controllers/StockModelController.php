<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockModelController extends Controller
{
    public function indexGet(Request $request)
    {
        $user = Auth::user();
        $reqPage = $request->page;
        $userInfo = $user->withCount('stocks')->get();
        $sort = $request->sort;
        if (isset($sort) == true) {
            $stockData = Stock::where('user_id', $user->id)
                ->orderBy($sort, 'asc')
                ->paginate(20);
            // $stockData = $user->join('stocks', 'users.id', '=', 'stocks.user_id')->orderBy($sort, 'asc')->paginate(5);
            // $stockData = $user->leftJoin('stocks', 'users.id', '=', 'stocks.user_id')->where('user_id', $user->id)->orderBy($sort, 'asc')->paginate(5);
        } else {
            $stockData = Stock::where('user_id', $user->id)
                ->paginate(20);
        }
        return view('homepage', compact('user', 'reqPage', 'userInfo', 'sort', 'stockData'));
    }

    // public function indexPost(Request $request)
    // {
    //     // dd($request);
    //     $this->validate($request, Stock::$rules);
    //         $stockFind = Stock::find($request->id);
    //         $stockFind->numbers = $request->numbers;
    //         $stockFind->save();
    //     return redirect('/inventory_control');
    // }

    public function registerGet(Request $request)
    {
        $user = Auth::user();
        $userInfo = $user->withCount('stocks')->get();
        return view('data_register', compact('user','userInfo'));
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, Stock::$rules);
        $stock = new Stock;
        $form = $request->all();
        unset($form['_token']);
        $stock->fill($form)->save();
        return redirect('/inventory_control');
    }

    public function update_deleteGet(Request $request)
    {
        $user = Auth::user();
        $userInfo = $user->withCount('stocks')->get();
        $userStocks = $user->stocks;
        $send_id = $request->send_id;
        $selectUserStock = $userStocks->where('id', $send_id)->first();
        return view('update_delete', compact(
            'user',
            'userInfo',
            'userStocks',
            'send_id',
            'selectUserStock',
        ));
    }

    public function update_deletePost(Request $request)
    {
        if ($request->has('updateBtn')){
            $this->validate($request, Stock::$rules);
            $stockFind = Stock::find($request->id);
            $form = $request->all();
            unset($form['_token']);
            $stockFind->fill($form)->save();
        } elseif ($request->has('deleteBtn')){
            Stock::find($request->id)->delete();
        }
        return redirect('/inventory_control');
    }

    public function withdrawalGet(Request $request)
    {
        $user = Auth::user();
        $userInfo = $user->withCount('stocks')->get();
        return view('withdrawal', compact('user', 'userInfo'));
    }

    public function withdrawalPost(Request $request)
    {
        $user = Auth::user();
        Auth::logout();
        $user->where('id', $user->id)->delete();
        Stock::where('user_id', $user->id)->delete();

        return redirect('/login');
    }

}

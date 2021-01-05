<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockModelController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $userInfo = $user->withCount('stocks')->get();
        $sort = $request->sort;
        if (isset($sort) == true) {
            $stockData = Stock::orderBy($sort, 'asc')->paginate(5);
        } else {
            $stockData = Stock::paginate(5);
        }
        return view('homepage', compact('user', 'userInfo', 'sort', 'stockData'));
    }

    // public function indexPost(Request $request)
    // {
    //     return view('homepage', compact());
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

}

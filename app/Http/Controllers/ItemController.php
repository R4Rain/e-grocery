<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index($locale, Item $item){
        return view('pages.item', [
            'item' => $item,
        ]);
    }

    public function buy($locale, Item $item){
        $user_id = Auth::user()->account_id;
        Order::create([
            'account_id' => $user_id,
            'item_id' => $item->item_id,
            'price' => $item->price,
        ]);
        return redirect()->back()->with('success', __('Successfully bought the item!'));
    }
}

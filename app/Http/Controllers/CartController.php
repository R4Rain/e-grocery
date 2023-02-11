<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user_id = Auth::user()->account_id;
        $orders = Order::where('account_id', $user_id);
        return view('pages.cart', [
            'orders' => $orders->get(),
            'total_order' => $orders->count(),
            'total_price' => $orders->sum('price'),
        ]);
    }

    public function checkout(){
        $user_id = Auth::user()->account_id;
        $orders = Order::where('account_id', $user_id);
        if($orders->count() > 0){
            $orders->delete();
            return redirect()->back()->with('result', __('We will contact you 1x24 hours.'));
        }
        return redirect()->back()->with('error', __('There is no item in your cart!'));
    }

    public function delete($locale, Order $order){
        $order->delete();
        return redirect()->back()->with('success', __('Successfully delete an order!'));
    }
}

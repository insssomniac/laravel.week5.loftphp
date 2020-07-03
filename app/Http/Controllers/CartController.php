<?php


namespace App\Http\Controllers;


use App\Order;
use App\User;

class CartController
{
    public function index()
    {
        $order = User::currentOrder();

        if (!empty($order)){
            $currentProducts = Order::find($order->id)->products;

            return view('cart', [
                'title' => 'Корзина – ГеймсМаркет',
                'products' => $currentProducts,
                'order' => $order,
            ]);
        } else {
            return view('cart', [
                'title' => 'Корзина – ГеймсМаркет',
                'order' => [],
                'products' => [],
            ]);
        }
    }

    public function submit()
    {
        $order = User::currentOrder();
        $order->status = 1;
        $order->save();
    }


}

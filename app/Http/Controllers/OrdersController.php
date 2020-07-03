<?php


namespace App\Http\Controllers;


use App\Order;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class OrdersController
{
    public function index()
    {
        return view('orders', ['title' => 'Заказы – ГеймсМаркет']);
    }

    public function buy(int $productId)
    {
        $user = Auth::user();
        if (!empty($user)) {
            $order = User::currentOrder();

            if (empty($order)) {
                Order::createOrder($productId);
            } else {
                Order::updateOrder($productId, $order->id);
            }

            return redirect()->back();

        } else {
            return 'Пожалуйста, войдите на сайт, чтобы делать покупки';
        }
    }

    public static function sendEmail()
    {

    }

}

<?php


namespace App\Http\Controllers;


use App\Category;
use App\Product;

class IndexController
{
    public function index()
    {
        $products = Product::query()->orderBy('created_at')->take(6)->get();
        return view('index', ['title' => 'Главная – ГеймсМаркет', 'products' => $products]);
    }
}

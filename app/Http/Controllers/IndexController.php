<?php


namespace App\Http\Controllers;


use App\Category;

class IndexController
{
    public function index()
    {
        $categories = Category::all();
        return view('index', ['categories' => $categories]);
    }
}

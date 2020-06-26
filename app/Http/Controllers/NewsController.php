<?php


namespace App\Http\Controllers;


class NewsController
{
    public function index()
    {
        return view('news');
    }

    public function newsview()
    {
        return view('newsview');
    }
}

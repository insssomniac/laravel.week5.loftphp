<?php


namespace App\Http\Controllers;


class AboutController
{
    public function index()
    {
        return view('about', ['title' => 'О компании – ГеймсМаркет']);
    }
}

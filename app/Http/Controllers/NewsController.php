<?php


namespace App\Http\Controllers;


use App\News;

class NewsController
{
    public function index()
    {
        $news = News::query()->orderBy('created_at')->take(6)->get();
        return view('news', [
            'title' => 'Новости – ГеймсМаркет',
            'news' => $news,
        ]);
    }

    public function newsView(int $id)
    {
        $news = News::find($id);
        $newsTitle = $news->title;
        return view('newsview', [
            'title' => $newsTitle . ' – ГеймсМаркет',
            'news' => $news
        ]);
    }
}

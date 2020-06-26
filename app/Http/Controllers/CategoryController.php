<?php


namespace App\Http\Controllers;

use App\Category;

class CategoryController
{
    public function viewCategory(int $category)
    {
        $categories = Category::all();
        return view('category');
    }
}

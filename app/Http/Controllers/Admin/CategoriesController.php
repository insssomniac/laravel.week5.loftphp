<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()->orderBy('name', 'ASC')->get();
        return view('admin.categories', ['categories' => $categories]);
    }

    function create()
    {
        return view('admin.categoryCreate');
    }

    public function edit(Category $category)
    {
        return view('admin.categoryEdit', ['category' => $category]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('/admin/categories');
    }

    public function save(Request $request)
    {
        $category = Category::query()->find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('/admin/categories');
    }

    public function delete(Request $request)
    {
        Category::destroy($request->id);
        return redirect()->route('/admin/categories');
    }

}

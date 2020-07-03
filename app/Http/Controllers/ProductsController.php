<?php


namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function productView(int $id)
    {
        $product = Product::find($id);


        return view('product', [
            'title' => $product->name . ' – ГеймсМаркет',
            'product' => $product,
        ]);
    }

}

<?php


namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function productView(int $id)
    {
        $productName = Product::find($id)->name;
        $productDesc = Product::find($id)->description;
        $productPrice = Product::find($id)->price;
        $productCategory = Product::find($id)->category->name;
        $productImage = Product::find($id)->image;

        return view('product', [
            'title' => $productName . ' – ГеймсМаркет',
            'productName' => $productName,
            'productDesc' => $productDesc,
            'productPrice' => $productPrice,
            'productCategory' => $productCategory,
            'productImage' => $productImage,
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $Products = [new Product("Стіл", "15$", "Звичайний шкільний стіл"),
            new Product("Стілець", "10$", "Звичайний шкільний стілець"),
            new Product("Диван", "30$", "Зручний шкіряний диван")];
        return view('main', ['Products' => $Products]);
    }

    public function getByName($name){
        $Products = [new Product("Стіл", "15$", "Звичайний шкільний стіл"),
            new Product("Стілець", "10$", "Звичайний шкільний стілець"),
            new Product("Диван", "30$", "Зручний шкіряний диван")];
        foreach ($Products as $product)
            if ($name == $product->name) return view('ProductPage', ['product' => $product]);
        return view('ProductPage', ['product' => new Product('unknown', 'unknown', 'unknown')]);
    }

    public function SearchPage(){
        return view('SearchProduct');
    }

    public function find(Request $request)
    {
        $name = $request->get('name');
        if ($name == "Стіл" or $name == "Стілець" or $name == "Диван")
            return redirect("/$name/ProductPage");
        else return redirect('/');
    }
}

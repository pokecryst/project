<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function home() {
        $product = Product::orderBy('id', 'desc')->take(12)->get();
        return view('home.index' , compact('product'));
    }

    public function product_details($id) {
        $data = Product::find($id);
        
        $products = Product::where('category_id', $data->category_id)->take(4)->get();
        
        return view('home.product_details', compact('data'), compact('products'));
    }
}
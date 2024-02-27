<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.products');
    }
    public function cat1()
    {
        return view('products.category')
            ->with('nameProduct', 'Food Beverage');
    }
    public function cat2()
    {
        return view('products.category')
            ->with('nameProduct', 'Beauty Helath');
    }
    public function cat3()
    {
        return view('products.category')
            ->with('nameProduct', 'Home Care');
    }
    public function cat4()
    {
        return view('products.category')
            ->with('nameProduct', 'Baby Kid');
    }
}

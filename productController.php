<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    function index(){
        $username = Auth::user()->name;
        $products = Product::all();
        return view('product', compact('products','username'));
    }
}

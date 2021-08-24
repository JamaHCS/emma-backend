<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }
}

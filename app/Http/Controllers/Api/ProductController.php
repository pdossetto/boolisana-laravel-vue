<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shape;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        return response()->json([
            'success' => true,
            'results' => Product::all()
        ]);
    }

    public function show($slug) {
        $product = Product::with('shape')->where('slug', $slug)->first();
        if($product) {
            return response()->json([
                'success' => true,
                'results' => $product
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => []
            ]);
        }
    }

    public function shape($id) {
        $shape = Shape::find($id);
        return response()->json([
            'success' => true,
            'results' => $shape->products
        ]);
    }
}

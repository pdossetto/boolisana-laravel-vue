<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function index() {
        return response()->json([
            'success' => true,
            'results' => Shape::all()
        ]);
    }
}

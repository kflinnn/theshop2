<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Models\Products;

class ProductsController extends Controller
{
    public function index() {
    $products = Products::all();
    return($products);
    }
    //

    public function create(Request $request) {
        $data = array(
            "name" => $request->name,
            "category" => $request->category,
            "price" => $request->price,
            "description" => $request->descriptiong,
            "image" => $request->image,    
        );

        return Products::create($data);
    }
}

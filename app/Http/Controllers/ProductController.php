<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function delete()
    {
        return view('products.delete');
    }
    
//storage function
    public function store(Request $request)
    {
        $data = $request -> validate(
            [
                'productname' => 'required',
                'quantity' => 'required|numeric',
                'price' => 'required|numeric',
                'description' => 'required',
            ]
            );

        $newproduct = ProductsModel::create($data);

        return redirect(route('products.index'));
    }

}

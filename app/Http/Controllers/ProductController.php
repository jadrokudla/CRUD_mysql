<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Product was updated successfully,  id: '. $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product was deleted successfully,  id: '. $product->id);
    }
}

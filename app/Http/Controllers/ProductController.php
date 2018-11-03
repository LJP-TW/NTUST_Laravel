<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 2018/11/2
 * Time: 下午 10:52
 */

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->get();

        $data = [
            'products' => $products
        ];

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage
     *
     * @param   \Illuminate\Http\Request $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\Product $product
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $data = [
            'product' => $product
        ];

        return view('products.edit', $data);
    }

    /**
     * Update database
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Delete record from database
     *
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

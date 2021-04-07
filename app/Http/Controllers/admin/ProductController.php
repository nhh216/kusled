<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateProduct;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
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
        $products = Product::orderBy('id', 'desc')->get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', \App\Models\Category::TYPE_PRODUCT)->orderBy('id', 'desc')->get();

        return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateProduct $request)
    {
        try {
            $product = new Product();
            $product->user_id = 1;
            $product->name = trim($request->name);
            $product->slug = changeTitle(trim($request->name));
            $product->category_id = $request->category_id;
            $product->status = isset($request->status) ? 1 : 0;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->short_desc = isset($request->short_desc) ? $request->short_desc : '';
            $product->full_desc = isset($request->full_desc) ? $request->full_desc : '';
            $product->code = $request->code;

            $product->save();

            if (isset($request->images)) {
                $data = [];
                foreach ($request->images as $key => $value) {
                    $imageName = 'imageProduct_'. $key . '_' . time() . '_' . $value->getClientOriginalExtension();
                    $value->move(public_path('upload/images_products'), $imageName);
                    $data[] = [
                        'link' => 'upload/images_products/' . $imageName,
                        'product_id' => $product->id
                    ];
                }
                Image::insert($data);
            }

            return redirect()->route('admin.product.index')->with('flash_message', 'Success!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->input())->with('error_message', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attributes;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
        $attributes = Attributes::orderBy('id', 'desc')->get();
        $arrAttr = [];
        foreach ($attributes as $index => $attribute) {
            $arrAttr[$attribute->key] = $attribute->text;
        }
        $arrAttr = json_encode($arrAttr);

        return view('admin.product.add', compact('categories', 'attributes', 'arrAttr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:products',
            'category_id' => 'required',
            'code' => 'required|unique:products|max:255',
            'price' => 'required|numeric|between:0,10000000000',
            'discount' => 'integer|between:0,100',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if($validation->passes()) {
            try {
                $info = [];
                if ($request->product_attributes) {
                    $attributes = Attributes::all()->toArray();
                    foreach ($request->product_attributes as $key => $product_attribute) {
                        foreach ($attributes as $attribute) {
                            $arrProAttr = [];
                            if ($key == $attribute['key']) {
                                $arrProAttr['key'] = $key;
                                $arrProAttr['text'] = $attribute['text'];
                                $arrProAttr['value'] = $product_attribute;

                                $info[] = $arrProAttr;
                            }
                        }
                    }
                }
                $info = json_encode($info);

                $product = new Product();
                $product->user_id = Auth::user()->id;
                $product->name = trim($request->name);
                $product->slug = changeTitle(trim($request->name));
                $product->category_id = $request->category_id;
                $product->status = isset($request->status) ? 1 : 0;
                $product->price = $request->price;
                $product->discount = $request->discount;
                $product->short_desc = isset($request->short_desc) ? $request->short_desc : '';
                $product->full_desc = isset($request->full_desc) ? $request->full_desc : '';
                $product->code = trim($request->code);
                $product->info = $info;

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
        } else {
            return redirect()->back()->withInput($request->input())->withErrors($validation->errors());
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
        $product = Product::findOrFail($id);
        $categories = Category::where('type', \App\Models\Category::TYPE_PRODUCT)->orderBy('id', 'desc')->get();
        $attributes = Attributes::orderBy('id', 'desc')->get();
        $arrAttr = []; // mảng [ 'key1' => 'text1', 'key2' => 'text2']
        $keyAttrsSelected = []; // mảng [ 'key1', 'key2'] đã lưu trong sp
        $valueAttrsSelected = []; // mảng [ 'key1' => 'value1', 'key2' => 'value2']

        foreach ($attributes as $index => $attribute) {
            $arrAttr[$attribute->key] = $attribute->text;
        }

        if ($product->info) {
            $attrsSelected = json_decode($product->info);
            foreach ($attrsSelected as $item) {
                $keyAttrsSelected[] = $item->key;
                $valueAttrsSelected[$item->key] = $item->value;
            }
        }
        $arrAttr = json_encode($arrAttr);
        $valueAttrsSelected = json_encode($valueAttrsSelected);

        return view('admin.product.edit', compact(
            'categories',
            'product',
            'attributes',
            'arrAttr',
            'keyAttrsSelected',
            'valueAttrsSelected'
        ));
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
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:products,name,'.$id,
            'category_id' => 'required',
            'code' => 'required|max:255|unique:products,code,'.$id,
            'price' => 'required|numeric|between:0,10000000000',
            'discount' => 'integer|between:0,100',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($validation->passes()) {
            try {
                $product = Product::findOrFail($id);

                $info = [];
                if ($request->product_attributes) {
                    $attributes = Attributes::all()->toArray();
                    foreach ($request->product_attributes as $key => $product_attribute) {
                        foreach ($attributes as $attribute) {
                            $arrProAttr = [];
                            if ($key == $attribute['key']) {
                                $arrProAttr['key'] = $key;
                                $arrProAttr['text'] = $attribute['text'];
                                $arrProAttr['value'] = $product_attribute;

                                $info[] = $arrProAttr;
                            }
                        }
                    }
                }
                $info = json_encode($info);

                $product->update([
                    'user_id' => Auth::user()->id,
                    'name' => trim($request->name),
                    'slug' => changeTitle(trim($request->name)),
                    'category_id' => $request->category_id,
                    'status' => isset($request->status) ? 1 : 0,
                    'price' => $request->price,
                    'discount' => $request->discount,
                    'short_desc' => isset($request->short_desc) ? $request->short_desc : '',
                    'full_desc' => isset($request->full_desc) ? $request->full_desc : '',
                    'code' => trim($request->code),
                    'info' => $info
                ]);

                $arrSrcImg = $request->arrSrcImg ? explode(',', $request->arrSrcImg) : [];
                $imagesOld = Image::where('product_id', $id)->get();

                foreach ($imagesOld as $img) {
                    if (!in_array($img->link, $arrSrcImg)) {
                        File::delete($img->link);
                        Image::destroy($img->id);
                    }
                }

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
        } else {
            return redirect()->back()->withInput($request->input())->withErrors($validation->errors());
        }

    }

    public function delete($id)
    {
        try {
            $images = Image::where('product_id', $id)->get();
            foreach ($images as $image) {
                File::delete($image->link);
            }
            Image::where('product_id', $id)->delete();
            Product::destroy($id);

            return redirect()->route('admin.product.index')->with('flash_message', 'Success!');
        } catch (\Exception $e) {
            return redirect()->route('admin.product.index')->withErrors('Error');
        }

    }
}

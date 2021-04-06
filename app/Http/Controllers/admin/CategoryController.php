<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCategory;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateCategory $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->type = $request->type;
        $category->slug = changeTitle($request->name);
        $category->save();

        return redirect()->route('admin.category.index')->with('flash_message', 'Success!');
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
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateCategory $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'type' => $request->type,
            'slug' => changeTitle($request->name),
        ]);

        return redirect()->route('admin.category.index')->with('flash_message', 'Success!');
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

    public function delete($id)
    {
        $products = Product::where('category_id', $id)->get()->toArray();
        $posts = Post::where('category_id', $id)->get()->toArray();
        if (count($products) > 0) {
            $errors[] = 'Vẫn còn sản phẩm thuộc danh mục này';
        } elseif (count($posts) > 0) {
            $errors[] = 'Vẫn còn bài viết thuộc danh mục này';
        } else {
            $category = Category::find($id);
            $category->delete();
        }

        if (count($errors) > 0) {
            return redirect()->route('admin.category.index')->withErrors($errors);
        } else {
            return redirect()->route('admin.category.index')->with('flash_message', 'Success!');
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:categories',
            'type' => 'required'
        ]);
        if ($validation->passes()) {
            try {
                $category = new Category();
                $category->name = trim($request->name);
                $category->type = $request->type;
                $category->slug = changeTitle(trim($request->name));
                $category->save();

                return redirect()->route('admin.category.index')->with('flash_message', 'Success!');
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
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:categories,name,'.$id,
            'type' => 'required'
        ]);
        if ($validation->passes()) {
            try {
                $category = Category::findOrFail($id);
                $category->update([
                    'name' => trim($request->name),
                    'type' => $request->type,
                    'slug' => changeTitle(trim($request->name)),
                ]);

                return redirect()->route('admin.category.index')->with('flash_message', 'Success!');
            } catch (\Exception $e) {
                return redirect()->back()->withInput($request->input())->with('error_message', 'Error');
            }
        } else {
            return redirect()->back()->withInput($request->input())->withErrors($validation->errors());
        }
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
        $errors = [];
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

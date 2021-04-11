<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', \App\Models\Category::TYPE_POST)->orderBy('id', 'desc')->get();

        return view('admin.post.add', compact('categories'));
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
            'title' => 'required|max:255',
            'category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($validation->passes()) {
            try {
                $post = new Post();
                $post->user_id = Auth::user()->id;
                $post->title = trim($request->title);
                $post->slug = changeTitle(trim($request->title));
                $post->category_id = $request->category_id;
                $post->short_desc = isset($request->short_desc) ? $request->short_desc : '';
                $post->content = isset($request->content) ? $request->content : '';
                if (isset($request->images)) {
                    $value = $request->images[0];
                    $imageName = 'imagePost_0_' . time() . '_' . $value->getClientOriginalExtension();
                    $value->move(public_path('upload/images_posts'), $imageName);
                    $post->image = 'upload/images_posts/' . $imageName;
                }
                $post->save();


                return redirect()->route('admin.post.index')->with('flash_message', 'Success!');
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
        $post = Post::findOrFail($id);
        $categories = Category::where('type', \App\Models\Category::TYPE_POST)->orderBy('id', 'desc')->get();

        return view('admin.post.edit', compact('post', 'categories'));
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
            'title' => 'required|max:255',
            'category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($validation->passes()) {
            try {
                $post = Post::findOrFail($id);
                $post->update([
                    'user_id' => Auth::user()->id,
                    'title' => trim($request->title),
                    'slug' => changeTitle(trim($request->title)),
                    'category_id' => $request->category_id,
                    'short_desc' => isset($request->short_desc) ? $request->short_desc : '',
                    'content' => isset($request->content) ? $request->content : '',
                ]);


               if (isset($request->images)) {
                   if ($post->image) {
                       File::delete($post->image);
                   }
                   $value = $request->images[0];
                   $imageName = 'imagePost_0_' . time() . '_' . $value->getClientOriginalExtension();
                   $value->move(public_path('upload/images_posts'), $imageName);
                   $post->image = 'upload/images_posts/' . $imageName;
                   $post->update([
                       'image' => 'upload/images_posts/' . $imageName
                   ]);
               }

               return redirect()->route('admin.post.index')->with('flash_message', 'Success!');
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
        try {
            $post = Post::findOrFail($id);
            if ($post->image) {
                File::delete($post->image);
            }
            $post->delete();

            return redirect()->route('admin.post.index')->with('flash_message', 'Success!');
        } catch (\Exception $e) {
            return redirect()->route('admin.post.index')->withErrors('Error');
        }
    }
}

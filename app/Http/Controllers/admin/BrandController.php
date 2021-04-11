<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();

        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.add');
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
            'name' => 'required|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($validation->passes()) {
            try {
                $brand = new Brand();
                $brand->name = $request->name;
                if (isset($request->images)) {
                    $value = $request->images[0];
                    $imageName = 'imageBrand_0_' . time() . '_' . $value->getClientOriginalExtension();
                    $value->move(public_path('upload/images_brands'), $imageName);
                    $brand->image = 'upload/images_brands/' . $imageName;
                }
                $brand->save();

                return redirect()->route('admin.brand.index')->with('flash_message', 'Success!');
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
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', compact('brand'));
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
            'name' => 'required|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($validation->passes()) {
            try {
                $brand = Brand::findOrFail($id);
                $brand->name = $request->name;
                $brand->update([
                    'name' => $request->name
                ]);

                if (isset($request->images)) {
                    if ($brand->image) {
                        File::delete($brand->image);
                    }
                    $value = $request->images[0];
                    $imageName = 'imageBrand_0_' . time() . '_' . $value->getClientOriginalExtension();
                    $value->move(public_path('upload/images_brands'), $imageName);
                    $brand->image = 'upload/images_brands/' . $imageName;
                    $brand->update([
                        'image' => 'upload/images_brands/' . $imageName
                    ]);
                }

                return redirect()->route('admin.brand.index')->with('flash_message', 'Success!');
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
            $brand = Brand::findOrFail($id);
            if ($brand->image) {
                File::delete($brand->image);
            }
            $brand->delete();

            return redirect()->route('admin.brand.index')->with('flash_message', 'Success!');
        } catch (\Exception $e) {
            return redirect()->route('admin.brand.index')->withErrors('Error');
        }
    }
}

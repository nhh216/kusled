<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Exception;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attributes::orderBy('id', 'desc')->get();

        return view('admin.attribute.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attribute.add');
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
            'text' => 'required|max:255|unique:attributes',
        ]);

        if ($validation->passes()) {
            try {
                $key = setKeyAttribute(trim($request->text));
                $checkIssetKey = Attributes::where('key', $key)->get()->toArray();
                if (count($checkIssetKey) > 0) {
                    throw new \Exception('key already exists');
                }

                $attribute = new Attributes();
                $attribute->text = trim($request->text);
                $attribute->key = $key;
                $attribute->save();

                return redirect()->route('admin.attribute.index')->with('flash_message', 'Success!');
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
        $attribute = Attributes::findOrFail($id);

        return view('admin.attribute.edit', compact('attribute'));
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
            'text' => 'required|max:255|unique:attributes,text,'.$id,
        ]);
        if ($validation->passes()) {
            try {
                $key = setKeyAttribute(trim($request->text));
                $checkIssetKey = Attributes::where('id', '!=', $id)->where('key', $key)->get()->toArray();
                if (count($checkIssetKey) > 0) {
                    throw new \Exception('key already exists');
                }

                $attribute = Attributes::findOrFail($id);
                $attribute->update([
                    'key' => $key,
                    'text' => trim($request->text),
                ]);

                return redirect()->route('admin.attribute.index')->with('flash_message', 'Success!');
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

    public function delete($id) {
//        $arrtibute = Attributes::findOrFail($id);
//        $arrtibute->delete();
//
//        return redirect()->route('admin.attribute.index')->with('flash_message', 'Success!');
    }
}

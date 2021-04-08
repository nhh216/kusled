<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\ImageConfig;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageConfigController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = ImageConfig::all();

        return view('admin.image-config.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.image-config.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $patch = '/uploads/';
        $uploadedFile = $request->file('file');
        $filename = now()->timestamp .'-'.  $request->request->get("name") . '-'.$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            '/public'.$patch,
            $uploadedFile,
            $filename
        );
        $newImage = new ImageConfig();
        $newImage->name = $request->request->get("name");
        $newImage->type = $request->request->get("type");
        $newImage->link = Storage::disk('local')->path($filename);
        $newImage->save();
        return redirect()->route('image-config.create')->with('flash_message', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}

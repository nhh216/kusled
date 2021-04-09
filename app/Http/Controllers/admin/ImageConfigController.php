<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\ImageConfig;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\at;

class ImageConfigController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $images = ImageConfig::all();
        $logo = $images->where('type', 'LOGO')->first();
        $banner = $images->where('type', 'BANNER')->first();
        $sliders = $images->where('type', 'SLIDER');
        return view('admin.image-config.add')->with([
            'logo' => $logo,
            'banner' => $banner,
            'sliders' => $sliders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $type = $request->request->get("type");
        $patch = 'upload/image_configs/';
        if ($type == ImageConfig::TYPE_LOGO) {
            $uploadedFile = $request->file('file');
            $filename = now()->timestamp .'-'.  $request->request->get("name") . '-'.$uploadedFile->getClientOriginalName();
            $uploadedFile->move(public_path('upload/image_configs'), $filename);
            $newImage = new ImageConfig();
            $newImage->name = $request->request->get("name");
            $newImage->type = $type;
            $newImage->link =  $patch .$filename;
            $newImage->save();
        } else if ($type ==  ImageConfig::TYPE_SLIDER) {
            $arrId = $request->request->get("id");
            $arrName = $request->request->get("name");
            $arrDesc = $request->request->get("desc");
            $arrOldLink = $request->request->get("link");
            for ($i = 0; $i < sizeof($arrId); $i++ ) {
                $data = [
                    'desc' => $arrDesc[$i],
                    'link' => $arrOldLink[$i]
                ];
                $file = $request->file('file-'.$arrId[$i]);
                if ($file != null) {
                    $fileName = now()->timestamp .'-'.  $arrName[$i] . '-'.$file->getClientOriginalName();
                    $file->move(public_path('upload/image_configs'), $fileName);
                    $data['link'] = $patch .$fileName;
                    ImageConfig::where('name', $arrName[$i])->update($data);
                }
            }
        }
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

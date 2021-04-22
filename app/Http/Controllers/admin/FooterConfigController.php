<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FooterConfig;
use Illuminate\Http\Request;

class FooterConfigController extends Controller
{
    public function create()
    {
        $footer = FooterConfig::first();

        return view('admin.footer_config.add', compact('footer'));
    }

    public function store(Request $request)
    {
        $oldFooter = FooterConfig::first();

        $footer = new FooterConfig();
        $footer->address = isset($request->address) ? $request->address : '';
        $footer->phone = isset($request->phone) ? $request->phone : '';
        $footer->email = isset($request->email) ? $request->email : '';
        $footer->time_working = isset($request->time_working) ? $request->time_working : '';
        $footer->contact = isset($request->contact) ? $request->contact : '';
        $footer->introduce = isset($request->introduce) ? $request->introduce : '';
        $footer->return_policy = isset($request->return_policy) ? $request->return_policy : '';
        $footer->privacy_policy = isset($request->privacy_policy) ? $request->privacy_policy : '';
        $footer->terms_of_service = isset($request->terms_of_service) ? $request->terms_of_service : '';
        $footer->save();
        if ($oldFooter) {
            $oldFooter->delete();
        }

        return view('admin.footer_config.add', compact('footer'))->with('flash_message', 'Success!');
    }
}

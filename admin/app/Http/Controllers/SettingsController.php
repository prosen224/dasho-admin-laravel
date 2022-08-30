<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Settings;
use File;




class SettingsController extends Controller
{
    public function generalItem()
    {
        $item = Settings::first();
        if($item != NULL)
        {
            return view('backend.home_page.settings.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.settings.create');
        }
        
    }
    public function generalCreate(Request $request){


        $general = new Settings();

        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/general', $filename);
            $general->logo = $filename;
        }

        if($request->hasfile('favicon'))
        {
            $file = $request->file('favicon');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/general', $filename);
            $general->favicon = $filename;
        }

        $general->email = $request->email;
        $general->phone = $request->phone;
        $general->column_title_3rd = $request->column_title_3rd;
        $general->column_richtext_3rd = $request->column_richtext_3rd;
        $general->column_title_4th = $request->column_title_4th;
        $general->column_richtext_4th = $request->column_richtext_4th;
        $general->facebook = $request->facebook;
        $general->instagram = $request->instagram;
        $general->blog = $request->blog;
        $general->telegram = $request->telegram;
        $general->copyright = $request->copyright;

        $general->save();
        return redirect()->route('home');
    }

    public function generalUpdate(Request $request, $id){


        $general = Settings::find($id);

        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');

            $old_img = public_path('uploads/general/'.Settings::find($id)->logo);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/general', $filename);
            $general->logo = $filename;
        }

        if($request->hasfile('favicon'))
        {
            $file = $request->file('favicon');
            $old_img = public_path('uploads/general/'.Settings::find($id)->favicon);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/general', $filename);
            $general->favicon = $filename;
        }

        $general->email = $request->email;
        $general->phone = $request->phone;
        $general->column_title_3rd = $request->column_title_3rd;
        $general->column_richtext_3rd = $request->column_richtext_3rd;
        $general->column_title_4th = $request->column_title_4th;
        $general->column_richtext_4th = $request->column_richtext_4th;
        $general->facebook = $request->facebook;
        $general->instagram = $request->instagram;
        $general->blog = $request->blog;
        $general->telegram = $request->telegram;
        $general->copyright = $request->copyright;

        $general->update();
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Globals;
use Validator;
use File;



class GlobalsController extends Controller
{
    public function globalsItem()
    {
        $item = Globals::first();

        if($item != NULL)
        {
            return view('backend.home_page.globals.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.globals.create');
        }
    }


    public function globalsCreate(Request $request)
    {
        $validated = $request->validate([
            'transparent_text' => 'required|min:5',
            'title_left' => 'required|min:5',
            'title_right' => 'required|min:5',
            'description' => 'required|min:5',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $globals = new Globals();
        $globals->transparent_text = $request->transparent_text;
        $globals->title_left = $request->title_left;
        $globals->title_right = $request->title_right;
        $globals->description = $request->description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/globals', $filename);
            $globals->image = $filename;
        }

        $globals->save();
        return redirect()->route('home');
        
    }


    public function globalsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'transparent_text' => 'required|min:5',
            'title_left' => 'required|min:5',
            'title_right' => 'required|min:5',
            'description' => 'required|min:5',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $globals = Globals::find($id);
        $globals->transparent_text = $request->transparent_text;
        $globals->title_left = $request->title_left;
        $globals->title_right = $request->title_right;
        $globals->description = $request->description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/globals/'.Globals::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/globals', $filename);
            $globals->image = $filename;
        }

        $globals->update();
        return redirect()->route('home');
        
    }

}

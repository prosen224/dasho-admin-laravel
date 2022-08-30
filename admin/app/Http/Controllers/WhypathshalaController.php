<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Whypathshala;
use File;



class WhypathshalaController extends Controller
{
    public function whyPathshalaItem()
    {
        $item = Whypathshala::first();
        if($item != NULL)
        {
            return view('backend.home_page.why_pathshala.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.why_pathshala.create');
        }
        
    }

    public function whyPathshalaCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $why = new Whypathshala();
        $why->title = $request->title;
        $why->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/why_pathshala', $filename);
            $why->image = $filename;
        }

        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.'.$extension;
            $file->move('uploads/why_pathshala', $filename);
            $why->image2 = $filename;
        }
    
        $why->save();
        return redirect()->route('home');

    }



    public function whyPathshalaUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $why = Whypathshala::find($id);
        $why->title = $request->title;
        $why->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/why_pathshala/'.Whypathshala::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/why_pathshala', $filename);
            $why->image = $filename;
        }
    
        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');

            $old_img = public_path('uploads/why_pathshala/'.Whypathshala::find($id)->image2);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.'.$extension;
            $file->move('uploads/why_pathshala', $filename);
            $why->image2 = $filename;
        }

        $why->update();
        return redirect()->route('home');
    }
}

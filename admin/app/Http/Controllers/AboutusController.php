<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Aboutus;
use Validator;
use File;

class AboutusController extends Controller
{
    public function aboutItem()
    {
        $item = Aboutus::first();

        if($item != NULL)
        {
            return view('backend.home_page.about.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.about.create');
        }
    }


    public function aboutCreate(Request $request)
    {
        $validated = $request->validate([
            'section_name' => 'required|min:5',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'sign_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $aboutus = new Aboutus();
        $aboutus->section_name = $request->section_name;
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;
        $aboutus->sign_image = $request->sign_image;
        $aboutus->banner_image = $request->banner_image;
        
        if($request->hasfile('sign_image'))
        {
            $file = $request->file('sign_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'sign'.'.' .$extension;
            $file->move('uploads/about_us', $filename);
            $aboutus->sign_image = $filename;
        }
        
        if($request->hasfile('banner_image'))
        {
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/about_us', $filename);
            $aboutus->banner_image = $filename;
        }
        
        $aboutus->save();
        return redirect()->route('home');
    }




    public function aboutUpdate(Request $request, $id)
    {

        $validated = $request->validate([
            'section_name' => 'required|min:5',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'sign_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'banner_image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $aboutus = Aboutus::find($id);
        $aboutus->section_name = $request->section_name;
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;
        
        if($request->hasfile('sign_image')){
            $file = $request->file('sign_image');

            $old_img = public_path('uploads/about_us/'.Aboutus::find($id)->sign_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/about_us', $filename);
            $aboutus->sign_image = $filename;
        }
        
        if($request->hasfile('banner_image'))
        {
            $file = $request->file('banner_image');

            $old_img = public_path('uploads/about_us/'.Aboutus::find($id)->banner_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/about_us', $filename);
            $aboutus->banner_image = $filename;
        }
        
        $aboutus->update();
        return redirect()->route('home');
    }
}

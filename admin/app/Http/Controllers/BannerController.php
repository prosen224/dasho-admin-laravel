<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Aboutus;
use Validator;
use File;


class BannerController extends Controller
{

    public function index(){
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(25);
        return view('backend.home_page.slider.index', compact('sliders'));
    }


    public function create(){
        return view('backend.home_page.slider.create');
    }


    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'button_label' => 'required',
            'button_link' => 'required',
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('banner_image');
        $destinationPath = public_path('/uploads/banner_image');
        
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;
        $slider->button_label = $request->button_label;
        $slider->featured = $request->featured;

        if($request->hasfile('banner_image')){
            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,2200,1265);
            $slider->banner_image = $imageNameAfterUpload;
        }

        $slider->save();

        return redirect()->route('slider.index');
    }

    public function edit(Request $request, $id){
        $slider = Slider::find($id);
        return view('backend.home_page.slider.edit', compact('slider'));
    }


    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'button_label' => 'required',
            'button_link' => 'required',
            'banner_image' => 'mimes:jpeg,png,jpg,gif,svg',

        ]);

        $image = $request->file('banner_image');
        $destinationPath = public_path('/uploads/banner_image');


        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->button_link = $request->button_link;
        $slider->button_label = $request->button_label;
        $slider->featured = $request->featured;

        if($request->hasfile('banner_image')){
            $file = $request->file('banner_image');

            $old_img = public_path('uploads/banner_image/'.Slider::find($id)->banner_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,2200,1265);
            $slider->banner_image = $imageNameAfterUpload;
            
        }

        $slider->update();
        return redirect()->route('slider.index');
    }


    public function delete($id){
        $slider = Slider::find($id);

        $old_img = public_path('uploads/banner_image/'.Slider::find($id)->banner_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
        $slider->delete();
        return redirect()->route('slider.index');
    }
}

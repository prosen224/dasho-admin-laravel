<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Slider;
use Validator;
use File;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::orderBy('created_at', 'desc')->paginate(25);
        return view('backend.home_page.testimonial.index', compact('testimonials'));
    }


    public function create(){
        return view('backend.home_page.testimonial.create');
    }


    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required|min:5',
            'city' => 'required',
            'profile_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('profile_image');
        $destinationPath = public_path('/uploads/testimonial');
        
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->comment = $request->comment;
        $testimonial->city = $request->city;

        if($request->hasfile('profile_image')){
            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,300,300);
            $testimonial->profile_image = $imageNameAfterUpload;
        }

        $testimonial->save();

        return redirect()->route('testimonial.index');
    }


    public function edit(Request $request, $id){
        $testimonial = Testimonial::find($id);
        return view('backend.home_page.testimonial.edit', compact('testimonial'));
    }



    public function update(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required|min:5',
            'city' => 'required',
            'profile_image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('profile_image');
        $destinationPath = public_path('/uploads/testimonial');
        
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->comment = $request->comment;
        $testimonial->city = $request->city;

        if($request->hasfile('profile_image')){

            $old_img = public_path('uploads/testimonial/'.Testimonial::find($id)->profile_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,300,300);
            $testimonial->profile_image = $imageNameAfterUpload;
        }

        $testimonial->update();

        return redirect()->route('testimonial.index');
    }


    public function delete($id){
        $testimonial = Testimonial::find($id);

        $old_img = public_path('uploads/testimonial/'.Testimonial::find($id)->profile_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

        $testimonial->delete();
        return redirect()->route('testimonial.index');
    }
}

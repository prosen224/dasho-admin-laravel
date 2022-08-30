<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigwig;
use Validator;
use File;

class BigwigController extends Controller
{
    public function index(){
        $bigwigs = Bigwig::orderBy('created_at', 'desc')->paginate(25);
        return view('backend.home_page.bigwig.index', compact('bigwigs'));
    }


    public function create(){
        return view('backend.home_page.bigwig.create');
    }


    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required|min:5',
            'designation' => 'required',
            'profile_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('profile_image');
        $destinationPath = public_path('/uploads/bigwig');
        
        $bigwig = new Bigwig();
        $bigwig->name = $request->name;
        $bigwig->comment = $request->comment;
        $bigwig->designation = $request->designation;

        if($request->hasfile('profile_image')){
            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,300,300);
            $bigwig->profile_image = $imageNameAfterUpload;
        }

        $bigwig->save();

        return redirect()->route('bigwig.index');
    }


    public function edit(Request $request, $id){
        $bigwig = Bigwig::find($id);
        return view('backend.home_page.bigwig.edit', compact('bigwig'));
    }


    public function update(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required|min:5',
            'designation' => 'required',
            'profile_image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('profile_image');
        $destinationPath = public_path('/uploads/bigwig');
        
        $bigwig = Bigwig::find($id);
        $bigwig->name = $request->name;
        $bigwig->comment = $request->comment;
        $bigwig->designation = $request->designation;

        if($request->hasfile('profile_image')){

            $old_img = public_path('uploads/bigwig/'.Bigwig::find($id)->profile_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            
            $imageNameAfterUpload = imageUploadWithResize($image,$destinationPath,300,300);
            $bigwig->profile_image = $imageNameAfterUpload;
        }

        $bigwig->update();

        return redirect()->route('bigwig.index');
    }


    public function delete($id){
        $bigwig = Bigwig::find($id);

        $old_img = public_path('uploads/bigwig/'.Bigwig::find($id)->profile_image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

        $bigwig->delete();
        return redirect()->route('bigwig.index');
    }
}

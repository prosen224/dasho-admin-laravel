<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Validator;
use File;
use App\Models\Aboutus;


class VideoController extends Controller
{
    public function videoItem()
    {
        $item = Video::first();

        if($item != NULL)
        {
            return view('backend.home_page.video.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.video.create');
        }
    }

    public function videoCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'video' => 'required|mimes:mp4,mov,ogg',
        ]);

        $video = new Video();
        $video->title = $request->title;
        $video->sub_title = $request->sub_title;
        $video->description = $request->description;

        if($request->hasfile('video'))
        {
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/video', $filename);
            $video->video = $filename;
        }

        $video->save();
        return redirect()->route('home');


    }
    
    public function videoUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'video' => 'mimes:mp4,mov,ogg',
        ]);

        $video = Video::find($id);
        $video->title = $request->title;
        $video->sub_title = $request->sub_title;
        $video->description = $request->description;

        if($request->hasfile('video'))
        {
            $file = $request->file('video');


            $old_video = public_path('uploads/video/'.Video::find($id)->video);
            if(File::exists($old_video)){
                File::delete($old_video);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/video', $filename);
            $video->video = $filename;
        }
        
        $video->update();
        return redirect()->route('home');


    }

}

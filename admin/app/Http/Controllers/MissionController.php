<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use Validator;
use File;

class MissionController extends Controller
{
    public function missionItem()
    {
        $item = Mission::first();
        if($item != NULL)
        {
            return view('backend.home_page.mission.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.mission.create');
        }
    }

    public function missionCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5',
            'sub_title' => 'required|min:5',
            'description' => 'required|min:5',
            'icon_text_1' => 'required|min:2',
            'icon_text_2' => 'required|min:2',
            'icon_text_3' => 'required|min:2',
            'icon_1' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'icon_2' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'icon_3' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $mission = new Mission();
        $mission->title = $request->title;
        $mission->sub_title = $request->sub_title;
        $mission->description = $request->description;
        $mission->icon_text_1 = $request->icon_text_1;
        $mission->icon_text_2 = $request->icon_text_2;
        $mission->icon_text_3 = $request->icon_text_3;


        if($request->hasfile('icon_1'))
        {
            $file = $request->file('icon_1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_1 = $filename;
        }

        if($request->hasfile('icon_2'))
        {
            $file = $request->file('icon_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_2 = $filename;
        }

        if($request->hasfile('icon_3'))
        {
            $file = $request->file('icon_3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'3'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_3 = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'4'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->image = $filename;
        }
    
        $mission->save();
        return redirect()->route('home');
        
    }


    public function missionUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:5',
            'sub_title' => 'required|min:5',
            'description' => 'required|min:5',
            'icon_text_1' => 'required|min:2',
            'icon_text_2' => 'required|min:2',
            'icon_text_3' => 'required|min:2',
            'icon_1' => 'mimes:jpeg,png,jpg,gif,svg',
            'icon_2' => 'mimes:jpeg,png,jpg,gif,svg',
            'icon_3' => 'mimes:jpeg,png,jpg,gif,svg',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $mission = Mission::find($id);
        $mission->title = $request->title;
        $mission->sub_title = $request->sub_title;
        $mission->description = $request->description;
        $mission->icon_text_1 = $request->icon_text_1;
        $mission->icon_text_2 = $request->icon_text_2;
        $mission->icon_text_3 = $request->icon_text_3;


        if($request->hasfile('icon_1'))
        {
            $file = $request->file('icon_1');

            $old_img = public_path('uploads/mission/'.Mission::find($id)->icon_1);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_1 = $filename;
        }

        if($request->hasfile('icon_2'))
        {
            $file = $request->file('icon_2');

            $old_img = public_path('uploads/mission/'.Mission::find($id)->icon_2);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_2 = $filename;
        }

        if($request->hasfile('icon_3'))
        {
            $file = $request->file('icon_3');

            $old_img = public_path('uploads/mission/'.Mission::find($id)->icon_3);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'3'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->icon_3 = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/mission/'.Mission::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
            $extension = $file->getClientOriginalExtension();
            $filename = time().'4'.'.' .$extension;
            $file->move('uploads/mission', $filename);
            $mission->image = $filename;
        }
    
        $mission->update();
        return redirect()->route('home');
    }

}

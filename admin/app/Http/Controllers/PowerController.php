<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Power;
use File;


class PowerController extends Controller
{
    public function powerItem()
    {
        $item = Power::first();
        if($item != NULL)
        {
            return view('backend.home_page.power.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.power.create');
        }
        
    }


    public function powerCreate(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_link' => 'required',
            'button_label' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $power = new Power();
        $power->title = $request->title;
        $power->description = $request->description;
        $power->button_link = $request->button_link;
        $power->button_label = $request->button_label;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/power', $filename);
            $power->image = $filename;
        }
    
        $power->save();
        return redirect()->route('home');
    }


    public function powerUpdate(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_link' => 'required',
            'button_label' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $power = Power::find($id);
        $power->title = $request->title;
        $power->description = $request->description;
        $power->button_link = $request->button_link;
        $power->button_label = $request->button_label;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $old_img = public_path('uploads/power/'.Power::find($id)->image);

            if(File::exists($old_img)){
                File::delete($old_img);
            }


            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/power', $filename);
            $power->image = $filename;
        }
    
        $power->save();
        return redirect()->route('home');
    }
}

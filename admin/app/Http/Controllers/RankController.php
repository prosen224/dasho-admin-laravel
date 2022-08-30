<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Rank;
use File;



class RankController extends Controller
{
    public function ranksItem()
    {
        $item = Rank::first();
        if($item != NULL)
        {
            return view('backend.home_page.ranks.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.ranks.create');
        }
        
    }

    public function ranksCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $ranks = new Rank();
        $ranks->title = $request->title;
        $ranks->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/ranks', $filename);
            $ranks->image = $filename;
        }
    
        $ranks->save();
        return redirect()->route('home');

    }



    public function ranksUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $ranks = Rank::find($id);
        $ranks->title = $request->title;
        $ranks->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/ranks/'.Rank::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $file->move('uploads/ranks', $filename);
            $ranks->image = $filename;
        }
    
        $ranks->update();
        return redirect()->route('home');
    }
}

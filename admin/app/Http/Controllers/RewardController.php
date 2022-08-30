<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Reward;
use File;



class RewardController extends Controller
{
    public function rewardsItem()
    {
        $item = Reward::first();
        if($item != NULL)
        {
            return view('backend.home_page.rewards.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.rewards.create');
        }
        
    }

    public function rewardsCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $rewards = new Reward();
        $rewards->title = $request->title;
        $rewards->sub_title = $request->sub_title;
        $rewards->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/rewards', $filename);
            $rewards->image = $filename;
        }
    
        $rewards->save();
        return redirect()->route('home');

    }



    public function rewardsUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $rewards = Reward::find($id);
        $rewards->title = $request->title;
        $rewards->sub_title = $request->sub_title;
        $rewards->description = $request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/rewards/'.Reward::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $file->move('uploads/rewards', $filename);
            $rewards->image = $filename;
        }
    
        $rewards->update();
        return redirect()->route('home');
    }
}

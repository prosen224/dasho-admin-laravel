<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opportunity;
use Validator;
use File;


class OpportunityController extends Controller
{
    public function opportunityItem()
    {
        $item = Opportunity::first();
        if($item != NULL)
        {
            return view('backend.home_page.opportunity.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.opportunity.create');
        }
    }


    public function opportunityCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_label' => 'required',
            'button_link' => 'required',
            'icon_text_1' => 'required',
            'icon_text_2' => 'required',
            'icon_text_3' => 'required',
            'icon_1' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'icon_2' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'icon_3' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $opportunity = new Opportunity();
        $opportunity->title = $request->title;
        $opportunity->description = $request->description;
        $opportunity->button_link = $request->button_link;
        $opportunity->button_label = $request->button_label;
        $opportunity->icon_text_1 = $request->icon_text_1;
        $opportunity->icon_text_2 = $request->icon_text_2;
        $opportunity->icon_text_3 = $request->icon_text_3;

        if($request->hasfile('icon_1'))
        {
            $file = $request->file('icon_1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_1 = $filename;
        }

        if($request->hasfile('icon_2'))
        {
            $file = $request->file('icon_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_2 = $filename;
        }

        if($request->hasfile('icon_3'))
        {
            $file = $request->file('icon_3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'3'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_3 = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'4'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->image = $filename;
        }
    
        $opportunity->save();
        return redirect()->route('home');
    }



    public function opportunityUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_label' => 'required',
            'button_link' => 'required',
            'icon_text_1' => 'required',
            'icon_text_2' => 'required',
            'icon_text_3' => 'required',
            'icon_1' => 'mimes:jpeg,png,jpg,gif,svg',
            'icon_2' => 'mimes:jpeg,png,jpg,gif,svg',
            'icon_3' => 'mimes:jpeg,png,jpg,gif,svg',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $opportunity = Opportunity::find($id);
        $opportunity->title = $request->title;
        $opportunity->description = $request->description;
        $opportunity->button_link = $request->button_link;
        $opportunity->button_label = $request->button_label;
        $opportunity->icon_text_1 = $request->icon_text_1;
        $opportunity->icon_text_2 = $request->icon_text_2;
        $opportunity->icon_text_3 = $request->icon_text_3;

        if($request->hasfile('icon_1'))
        {
            $file = $request->file('icon_1');

            $old_img = public_path('uploads/opportunity/'.Opportunity::find($id)->icon_1);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'1'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_1 = $filename;
        }

        if($request->hasfile('icon_2'))
        {
            $file = $request->file('icon_2');
            $old_img = public_path('uploads/opportunity/'.Opportunity::find($id)->icon_2);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
            $extension = $file->getClientOriginalExtension();
            $filename = time().'2'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_2 = $filename;
        }

        if($request->hasfile('icon_3'))
        {
            $file = $request->file('icon_3');
            $old_img = public_path('uploads/opportunity/'.Opportunity::find($id)->icon_3);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
            $extension = $file->getClientOriginalExtension();
            $filename = time().'3'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->icon_3 = $filename;
        }
        if($request->hasfile('image'))
        {
            $file = $request->file('image');

            $old_img = public_path('uploads/opportunity/'.Opportunity::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }

            $extension = $file->getClientOriginalExtension();
            $filename = time().'4'.'.' .$extension;
            $file->move('uploads/opportunity', $filename);
            $opportunity->image = $filename;
        }
    
        $opportunity->update();
        return redirect()->route('home');

    }
}

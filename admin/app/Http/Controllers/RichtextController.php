<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Richtext;


class RichtextController extends Controller
{
    public function richtextItem()
    {
        $item = Richtext::first();
        if($item != NULL)
        {
            return view('backend.home_page.richtext.edit', compact('item'));
        }
        else
        {
            return view('backend.home_page.richtext.create');
        }
        
    }

    public function richtextCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $richtext = new Richtext();
        $richtext->title = $request->title;
        $richtext->sub_title = $request->title;
        $richtext->description = $request->description;
    
        $richtext->save();
        return redirect()->route('home');

    }



    public function richtextUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $richtext = Richtext::find($id);
        $richtext->title = $request->title;
        $richtext->sub_title = $request->sub_title;

        $richtext->description = $request->description;
    
        $richtext->update();
        return redirect()->route('home');
    }
}

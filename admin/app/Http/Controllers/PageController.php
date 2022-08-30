<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use Validator;
use File;
class PageController extends Controller
{
    public function index(){

        $pages = Page::orderBy('created_at', 'desc')->paginate(25);
        return view('backend.pages.index', compact('pages'));

    }
    public function create(){
        return view('backend.pages.create');
    }


    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $page = new Page();
        $page->title = $request->title;
        
        if($request->slug == null){
            $page->slug = Str::slug($request->title);
        }else{
            $page->slug = $request->slug;
        }


        $page->status = $request->status;
        $page->description = $request->description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/page', $filename);
            $page->image = $filename;
        }

        $page->save();
        return redirect()->route('pages.index');
    }


    public function edit($id){
        $page = Page::find(decrypt($id));
        return view('backend.pages.edit', compact('page'));
    }


    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        $page = Page::find(decrypt($id));

        $page->title = $request->title;
        if($request->slug == null){
            $page->slug = Str::slug($request->title);
        }else{
            $page->slug = $request->slug;
        }
        $page->status = $request->status;
        $page->description = $request->description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $old_img = public_path('uploads/page/'. Page::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/page', $filename);
            $page->image = $filename;
        }
        $page->update();
        return redirect()->route('pages.index');
    }

    public function delete(Request $request, $id){
        $page = Page::find($id);
        $old_img = public_path('uploads/page/'. Page::find($id)->image);
            if(File::exists($old_img)){
                File::delete($old_img);
            }
        $page->delete();
        return redirect()->route('pages.index');
    }




}

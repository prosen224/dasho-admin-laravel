<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation2;



class Navigation2Controller extends Controller
{
    public function index(){

        $navigations = Navigation2::orderBy('order', 'asc')->paginate(25);
        return view('backend.navigation.footer_menu.index', compact('navigations'));

    }

    public function create(){
        return view('backend.navigation.footer_menu.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'order' => 'required'
        ]);

        $navigation = new Navigation2();
        $navigation->name = $request->name;
        $navigation->link = $request->link;
        $navigation->status = $request->status;
        $navigation->order = $request->order;
        $navigation->save();
        return redirect()->route('navigation2.index');
        
    }

    public function edit($id){
        $navigation = Navigation2::find(decrypt($id));
        return view('backend.navigation.footer_menu.edit', compact('navigation'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'order' => 'required'
        ]);
        $navigation = Navigation2::find(decrypt($id));
        $navigation->name = $request->name;
        $navigation->link = $request->link;
        $navigation->status = $request->status;
        $navigation->order = $request->order;
        $navigation->update();
        return redirect()->route('navigation2.index');
        
    }

    public function delete($id){
        $navigation = Navigation2::find(decrypt($id));
        $navigation->delete();
        return redirect()->route('navigation2.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation;

class NavigationController extends Controller
{
    public function index(){

        $navigations = Navigation::orderBy('order', 'asc')->paginate(25);
        return view('backend.navigation.main_menu.index', compact('navigations'));

    }

    public function create(){
        return view('backend.navigation.main_menu.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'order' => 'required'
        ]);

        $navigation = new Navigation();
        $navigation->name = $request->name;
        $navigation->link = $request->link;
        $navigation->status = $request->status;
        $navigation->order = $request->order;
        $navigation->save();
        return redirect()->route('navigation.index');
        
    }

    public function edit($id){
        $navigation = Navigation::find(decrypt($id));
        return view('backend.navigation.main_menu.edit', compact('navigation'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'order' => 'required'
        ]);
        $navigation = Navigation::find(decrypt($id));
        $navigation->name = $request->name;
        $navigation->link = $request->link;
        $navigation->status = $request->status;
        $navigation->order = $request->order;
        $navigation->update();
        return redirect()->route('navigation.index');
        
    }

    public function delete($id){
        $navigation = Navigation::find(decrypt($id));
        $navigation->delete();
        return redirect()->route('navigation.index');
    }
}

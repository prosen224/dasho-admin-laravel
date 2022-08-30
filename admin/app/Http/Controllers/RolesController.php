<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Validator;
use Mail;

class RolesController extends Controller
{


    public function index(){

        
        $users = User::paginate(25);
        return view('backend.users.index', compact('users'));
    }


    public function create(){
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->role = 1;
        $user->menu_access = 0;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index');
    }


    public function edit($id){
        $user = User::find(decrypt($id));
        return view('backend.users.edit', compact('user'));


    }


    public function update(Request $request, $id)
    {
        $user = User::find(decrypt($id));
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;

        if($request->password != NULL && $request->password != ''){
            $user->password = bcrypt($request->password);
        }
        
        $user->update();

        return redirect()->route('users.index');
    }
}

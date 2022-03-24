<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view("/back/users/all",compact("users"));
    }
    public function create()
    {
        return view("/back/users/create");
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'borndate'=> 'required',
         'email'=> 'required',
         'password'=> 'required',
         'album'=> 'required',
        ]); // store_validated_anchor;
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->age = $request->age;
        $user->borndate = $request->borndate;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->album = $request->album;
        $user->save(); // store_anchor
        return redirect()->route("user.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $user = User::find($id);
        return view("/back/users/read",compact("user"));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view("/back/users/edit",compact("user"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'borndate'=> 'required',
         'email'=> 'required',
         'password'=> 'required',
         'album'=> 'required',
        ]); // update_validated_anchor;
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->age = $request->age;
        $user->borndate = $request->borndate;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->album = $request->album;
        $user->save(); // update_anchor
        return redirect()->route("user.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}

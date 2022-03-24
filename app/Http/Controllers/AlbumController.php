<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
    public function index()
    {
        $albums = Album::all();
        return view("/back/albums/all",compact("albums"));
    }
    public function create()
    {
        return view("/back/albums/create");
    }
    public function store(Request $request)
    {
        $album = new Album;
        $request->validate([
         'nom'=> 'required',
         'description'=> 'required',
         'auteur'=> 'required',
         'photo'=> 'required',
        ]); // store_validated_anchor;
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->auteur = $request->auteur;
        $album->photo = $request->photo;
        $album->save(); // store_anchor
        return redirect()->route("album.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $album = Album::find($id);
        return view("/back/albums/read",compact("album"));
    }
    public function edit($id)
    {
        $album = Album::find($id);
        return view("/back/albums/edit",compact("album"));
    }
    public function update($id, Request $request)
    {
        $album = Album::find($id);
        $request->validate([
         'nom'=> 'required',
         'description'=> 'required',
         'auteur'=> 'required',
         'photo'=> 'required',
        ]); // update_validated_anchor;
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->auteur = $request->auteur;
        $album->photo = $request->photo;
        $album->save(); // update_anchor
        return redirect()->route("album.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}

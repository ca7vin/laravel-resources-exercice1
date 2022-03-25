<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index()
    {
        $photos = Photo::orderBy('created_at','DESC')->get();
        return view("/back/photos/all",compact("photos"));
    }
    public function create()
    {
        $albums = Album::all();
        return view("/back/photos/create", compact("albums"));
    }
    public function store(Request $request)
    {
        $photo = new Photo;
        $request->validate([
         'nom'=> 'required',
         'lien'=> 'required',
         'album'=> 'required',
         'favori'=> 'required',
        ]); // store_validated_anchor;
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->album = $request->album;
        $photo->favori = $request->favori;
        $photo->save(); // store_anchor
        $targetAlbum = Album::find($request->album);
        $targetAlbum->photo += 1;
        $targetAlbum->save();
        return redirect()->route("photos.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/read",compact("photo"));
    }
    public function edit($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/edit",compact("photo"));
    }
    public function update($id, Request $request)
    {
        $photo = Photo::find($id);
        $request->validate([
         'nom'=> 'required',
         'lien'=> 'required',
         'album'=> 'required',
         'favori'=> 'required',
        ]); // update_validated_anchor;
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->album = $request->album;
        $photo->favori = $request->favori;
        $photo->save(); // update_anchor
        return redirect()->route("photos.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}

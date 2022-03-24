@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Albums</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('album.update' , $album->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $album->nom }}'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description' value='{{ $album->description }}'>
            </div>
            <div>
                <label for=''>auteur</label>
                <input type='text' name='auteur' value='{{ $album->auteur }}'>
            </div>
            <div>
                <label for=''>photo</label>
                <input type='text' name='photo' value='{{ $album->photo }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection

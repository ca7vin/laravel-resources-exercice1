@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Photos</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('photo.update' , $photo->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $photo->nom }}'>
            </div>
            <div>
                <label for=''>lien</label>
                <input type='text' name='lien' value='{{ $photo->lien }}'>
            </div>
            <div>
                <label for=''>album</label>
                <input type='text' name='album' value='{{ $photo->album }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection

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
        <form action='{{ route('photos.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>lien</label>
                <input type='text' name='lien'>
            </div>
            <div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Auteur</label>
                    </div>
                    <select name='album' class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      @foreach ($albums as $album)
                      <option value="{{ $album->id }}">{{ $album->nom }}</option>
                      @endforeach
                    </select>
                  </div>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection

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
        <form action='{{ route('albums.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Auteur</label>
                    </div>
                    <select name='auteur' class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }} {{ $user->firstname }}</option>
                      @endforeach
                    </select>
                  </div>
            </div>
            <div>
                <label for=''>photo</label>
                <input type='text' name='photo'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection

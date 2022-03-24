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
        <form action='{{ route('album.store') }}' method='post'>
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
                <label for=''>auteur</label>
                <input type='text' name='auteur'>
            </div>
            <div>
                <label for=''>photo</label>
                <input type='text' name='photo'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection

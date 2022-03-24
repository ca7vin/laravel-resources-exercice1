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
        <form action='{{ route('photo.store') }}' method='post'>
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
                <label for=''>album</label>
                <input type='text' name='album'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection

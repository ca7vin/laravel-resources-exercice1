@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Users</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('user.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>name</label>
                <input type='text' name='name'>
            </div>
            <div>
                <label for=''>firstname</label>
                <input type='text' name='firstname'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div>
                <label for=''>borndate</label>
                <input type='text' name='borndate'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email'>
            </div>
            <div>
                <label for=''>password</label>
                <input type='text' name='password'>
            </div>
            <div>
                <label for=''>album</label>
                <input type='text' name='album'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection

@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Albums</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('albums.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>description</th>
                    <th scope='col'>auteur</th>
                    <th scope='col'>photo</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <th scope='row'>{{ $album->id }}</th>
                        <td>{{ $album->nom }}</td>
                        <td>{{ $album->description }}</td>
                        <td>{{ $album->auteur }}</td>
                        <td>{{ $album->photo }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('albums.destroy', $album->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('albums.edit', $album->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('albums.show', $album->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

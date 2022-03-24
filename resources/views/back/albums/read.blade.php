@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Albums</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>description</th>
                    <th scope='col'>auteur</th>
                    <th scope='col'>photo</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $album->id }}</th>
                    <td>{{ $album->nom }}</td>
                    <td>{{ $album->description }}</td>
                    <td>{{ $album->auteur }}</td>
                    <td>{{ $album->photo }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('album.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Photos</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>lien</th>
                    <th scope='col'>album</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $photo->id }}</th>
                    <td>{{ $photo->nom }}</td>
                    <td>{{ $photo->lien }}</td>
                    <td>{{ $photo->album }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('photo.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

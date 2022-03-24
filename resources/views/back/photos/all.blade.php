@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Photos</h1>
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
        <a class='btn btn-success' href='{{ route('photo.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>lien</th>
                    <th scope='col'>album</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <th scope='row'>{{ $photo->id }}</th>
                        <td>{{ $photo->nom }}</td>
                        <td>{{ $photo->lien }}</td>
                        <td>{{ $photo->album }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('photo.destroy', $photo->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('photo.edit', $photo->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('photo.read', $photo->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

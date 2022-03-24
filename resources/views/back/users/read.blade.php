@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>name</th>
                    <th scope='col'>firstname</th>
                    <th scope='col'>age</th>
                    <th scope='col'>borndate</th>
                    <th scope='col'>email</th>
                    <th scope='col'>password</th>
                    <th scope='col'>album</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->borndate }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->album }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

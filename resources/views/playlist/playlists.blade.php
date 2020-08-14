@extends('layouts.app')


@section('content')
    <p><a href="{{ route('user_lists.create') }}">Create playlist</a></p>
    <h3>User Lists</h3>

    @if(empty($userLists))
        <p>you have no playlist</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">List name</th>
                <th scope="col">Public list?</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($userLists as $k => $userList)
                <tr>
                    <th scope="row">{{$k+1}}</th>
                    <td><a href="{{ url('/tracks/' . $userList->id) }}">{{ $userList->name }}</a></td>
                    <td>{{ $userList->public ? 'yes': 'no'}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @endif

@endsection

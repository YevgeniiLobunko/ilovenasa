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
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($userLists as $k => $userList)
                <tr>
                    <th scope="row">{{$k+1}}</th>
                    <td><a href="{{ url('/tracks/' . $userList->id) }}">{{ $userList->name }}</a></td>
                    <td>{{ $userList->public ? 'yes': 'no'}}</td>
                    <td>

                        <form method="POST" action="{{ route('user_lists.destroy', $userList->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="hidden" name="list_id" value="{{ $userList->id }}">
                                <input type="submit" class="btn btn-danger delete-user" value="Delete list">
                            </div>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @endif

@endsection

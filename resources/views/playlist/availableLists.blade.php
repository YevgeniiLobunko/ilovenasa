@extends('layouts.app')


@section('content')

    <h3>Available music lists</h3>

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">List name</th>
            <th scope="col">Number of songs in the list</th>
        </tr>
        </thead>
        <tbody>

        @foreach($lists as $k => $list)
            <tr>
                <td>{{ $k+1 }}</td>
                <td>{{ $list->user->name }}</td>
                <td>{{ $list->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

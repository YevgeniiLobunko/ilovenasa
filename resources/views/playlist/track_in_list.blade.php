@extends('layouts.app')


@section('content')

    <h3>{{$list['name']}}</h3>

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Artist</th>
            <th scope="col">Track</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($playlist as $k => $track)
            <tr>
                <td>{{$k+1}}</td>
                <td>  </td>
                <td>{{ $track->track->name }} </td>
                <td>play, stop, start, delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

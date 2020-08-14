@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create a list of user music</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user_lists.store') }}" method="POST">

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <a class="btn btn-primary" href="{{ route('user_lists.index') }}"> Back</a>
            </div>
        </div>


        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">

                    <strong>Public playlist?</strong><br>
                    <input class="" type="checkbox" name="public" value="1" checked>

                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                </div>
            </div>
            <div class="form-check">
                <table>
                    @foreach($tracks as $k => $track)
                        <tr style="width: 100%;">
                            <td>
                                <label class="form-check-label" for="defaultCheck{{$k}}">
                                    {{$track->artist->name}} - {{$track->name}}
                                </label>
                            </td>
                            <td>
                                <input class="" type="checkbox" name="tracks[]" value="{{$track->id}}"
                                       id="defaultCheck{{$k}}">
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
@endsection

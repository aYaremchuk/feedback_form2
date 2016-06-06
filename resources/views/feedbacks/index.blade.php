@extends('layout/template')

@section('content')
    <h1>Feedbacks</h1>
    <a href="{{url('/feedbacks/create')}}" class="btn btn-success">Create Feedback</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Attachment</th>
            <th>Meeting</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->birthday}}</td>
                <td>{{ $feedback->attachment }}</td>
                <td>{{ $feedback->meeting }}</td>
                {{--<td><img src="{{asset('upload/'.$feedback->image.'.jpg')}}" height="35" width="30"></td>--}}
                <td><a href="{{url('feedbacks',$feedback->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('feedbacks.edit',$feedback->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['feedbacks.destroy', $feedback->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
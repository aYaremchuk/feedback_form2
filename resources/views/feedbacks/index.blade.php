@extends('layout/default')

@section('content')
    <script src="/js/feedbacks.js"></script>

    <a href="/"><h1>Feedbacks</h1></a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Attachment</th>
            <th>Meeting</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->birthday}}</td>
                <td> <a href={{$feedback->attachment}}>Open file</a> </td>
                <td>{{ $feedback->meeting_date }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['feedbacks.destroy', $feedback->id],
                    'onsubmit' => 'return ConfirmDelete()']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
@extends('layout/template')
@section('title')
    Feedback
@endsection
@section('content')
    <form class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder={{$feedback->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Birthday</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$feedback->birthday}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Meeting date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$feedback->meeting_date}} readonly>
            </div>
        </div>
        <div class="form-group">
            <a href="{{$feedback->attachment}}" class="col-sm-2">Attached File</a>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('feedbacks')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop
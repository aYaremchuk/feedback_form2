@extends('layout/template')
@section('content')
    <h1>beedback Show</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Cover</label>
            <div class="col-sm-10">
                {{--<img src="{{asset('img/'.$feedback->image.'.jpg')}}" height="180" width="150" class="img-rounded">--}}
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="isbn" class="col-sm-2 control-label">ISBN</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="isbn" placeholder={{$feedback->isbn}} readonly>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder={{$feedback->name}} readonly>
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="author" class="col-sm-2 control-label">Author</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="author" placeholder={{$feedback->author}} readonly>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="publisher" class="col-sm-2 control-label">Publisher</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="publisher" placeholder={{$feedback->publisher}} readonly>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('feedbacks')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop
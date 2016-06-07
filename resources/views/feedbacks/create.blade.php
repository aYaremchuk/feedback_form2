
@extends('layout.template')
@section('title')
    Оставьте отзыв
@endsection
@section('content')
    <script type="text/javascript" src="{{ asset('/js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/feedbacks.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap-datetimepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/input-mask/jquery.inputmask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/input-mask/jquery.inputmask.extensions.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker();
        });
        $(document).ready(function(){
            $("#birthday").inputmask('dd/mm/yyyy', {'placeholder': 'дд/мм/гггг'});
        });
    </script>
    <link href="{{ asset('/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    {!! Form::open(['url' => 'feedbacks', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Имя Фамилия:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('birthday', 'Дата рождения:') !!}
        {!! Form::text('birthday', null, ['class'=>'form-control', 'id'=>'birthday']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('meeting_date', 'Дата встречи:') !!}
        <div class="input-group date" id='datetimepicker'>
            {!! Form::text('meeting_date', null, ['class'=>'form-control']) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('attachment', 'Прикрепить файл:') !!}
        {!! Form::file('attachment') !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Отправить', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
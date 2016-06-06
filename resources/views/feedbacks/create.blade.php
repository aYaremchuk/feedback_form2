
@extends('layout.template')
@section('content')
    <h1>Оставить отзыв</h1>
    {!! Form::open(['url' => 'feedbacks', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Имя:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('birthday', 'Дата рождения:') !!}
        {!! Form::date('birthday', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('attachment', 'Прикрепить файл:') !!}
        {!! Form::file('attachment') !!}
    </div>
    {{--<div class="form-group">--}}
        {{--{!! Form::label('meeting_date', 'Дата встречи:') !!}--}}
        {{--{!! Form::datetime('meeting_date', null, ['class'=>'form-control']) !!}--}}
    {{--</div>--}}
    <div class="form-group">
        {!! Form::submit('Отправить', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
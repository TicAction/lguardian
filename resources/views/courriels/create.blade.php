@extends('layouts.admin.main')
@section('content')


<div class="col-md-9 col-md-offset-1">

{!! Form::open(['url'=>'guardian/courriel','method'=>'POST','class'=>'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('send_date',"Date d'envoi") !!}
        {!! Form::text('send_date',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title','Titre') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject','Sujet') !!}
        {!! Form::text('subject',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::text('user_id',1,['class'=>'form-control']) !!}

    <div class="form-group">
        {!! Form::label('content','Contenue du message') !!}
        {!! Form::textarea('content',null,['class'=>'form-control ckeditor']) !!}
    </div>

    {!! Form::submit("Envoyer le courriel") !!}

{!! Form::close() !!}
</div>
@endsection

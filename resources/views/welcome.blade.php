@extends('layouts.app')

@section('content')
    <div class="text-center">

        <a href="{{url("/login")}}">
        <button type="button" class="btn btn-danger btn-lg">
            Je veux me connecter
        </button>
        </a>
        <a href="{{url('register')}}">
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
            Je veux créer un compte
        </button>
        </a>
    </div>


@endsection

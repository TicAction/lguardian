@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-md-offset-2">
        <form action="{{route('home.store')}}" method="post">

            {{ csrf_field() }}

            <input type="text" id="code" name="code">
            <button type="submit">Soumettre</button>
        </form>
    </div>


@endsection
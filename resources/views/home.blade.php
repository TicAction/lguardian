@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{trans_choice('messages.enfants',count($kids))}}</h3>
                </div>
                <div class="panel-body">
                   @foreach($user as $user)
                       @foreach($user->kids as $kid)
                           {{$kid->fullname}}<br>
                       @endforeach
                       @endforeach
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nouvelles de la classe</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{\Carbon\Carbon::now()->format("d/m/Y")}}</h3>
                </div>
                <div class="panel-body">


                </div>
            </div>
        </div>

    </div>
</div>
@endsection

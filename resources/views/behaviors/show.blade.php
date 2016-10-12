@extends('layouts.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Liste des comportements</h3>
        </div>
        <div class="panel-body">
                <p>
                    <strong>{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$behavior->behave_date)->format('l d F Y'))}}</strong>
                </p>
                   <hr>
                <p>
                    {{$behavior->behavior}}

                </p>
                <hr>

        </div>
    </div>
@endsection
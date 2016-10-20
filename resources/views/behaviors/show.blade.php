@extends('layouts.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Liste des comportements</h3>
        </div>
        <div class="panel-body">


            @foreach($behavior as $bev)
                @if($bev->publish == 1)
                    <p>
                        <strong>{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$bev->behave_date)->format('l d F Y'))}}</strong>
                    </p>
                    <hr>
                    <p>
                        {{$bev->behavior}}

                    </p>

                @endif
            @endforeach

            <hr>

        </div>
    </div>
@endsection
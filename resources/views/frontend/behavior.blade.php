@extends('layouts.admin')

@section('content')
    @if(!$behavior)
        Aucun comportement noté.
    @else
        <h1>Liste des comportements de {{$behavior->kid->firstname}}
            <small>
                {{count($behavior)}}

                @if (count($behavior) > 1 )
                    avertissements
                @else
                    avertissement
                @endif
            </small>
            @endif
        </h1>
        @foreach($behavior as $behave)
            <p>
                <strong>{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$behave->behave_date)->format('l d F Y'))}}</strong>
            </p>
            <hr>
            @if($behave->publish)
                <h4>Les parents peuvent voir ce comportement</h4>
            @else
                <h4>Les parents ne peuvent pas voir ce comportement</h4>
            @endif

            <p>

                {{$behave->behavior}}
            </p>
            <p>
                <a href="{{route('admin.comportement.edit',$behave->id)}}">

                    <button class="btn btn-success btn-xs">Modifier ce comportement</button>
                </a>
            </p>
      
            <hr>
        @endforeach

@endsection
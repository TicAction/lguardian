@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Comportement</h3>
                    </div>
                    <div class="panel-body">
                        <h5>LE NOM DE L'ENFANT</h5>
                        <ul class="list-unstyled">

                            @foreach($guardians as $guardian)
                                    @foreach($guardian->kids as $kid)
                                        <li>{{$kid->firstname}} {{$kid->lastname}}</li>
                                    @endforeach
                            @endforeach


                        </ul>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nouvelles de la classe</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>À venir</li>

                        </ul>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Évaluations à venir</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>À venir</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{\Carbon\Carbon::now()->format("d/m/Y")}}</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($fHomeworks as $fHomework)
                            <h4 class="text-center">
                                <a href="{{url('guardian/parent', $fHomework->id)}}">
                                    Leçons de la semaine du
                                    {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->start)->format('l d F Y')}}
                                    au
                                {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->end)->format('l d F Y')}}
                            </h4>

                            </a>
                            <hr>

                        @endforeach
                        <div class="text-center">
                            {{$fHomeworks->links()}}
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

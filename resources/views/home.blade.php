@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',Jenssegers\Date\Date::now())->format('l d F Y')}}</h3>
                </div>
                <div class="panel-body">
                    @foreach($fHomeworks as $fHomework)

                        @if($fHomework->start <= \Carbon\Carbon::now())

                        <a href="{{url('guardian/parent', $fHomework->id)}}">
                            Leçons du
                            {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->start)->format('l d F Y')}}
                            au
                            {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->end)->format('l d F Y')}}

                        </a>
                        <hr>
                        @endif
                    @endforeach
                    <div class="text-center">
                        {{$fHomeworks->links()}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Comportement</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <th>Date</th>
                            <th>Voir</th>
                        </tr>
                        @foreach($guardians as $guardian)
                            @foreach($guardian->kids as $kid)
                                @foreach($behaviors as $behavior)
                                    @if($behavior->kid_id == $kid->id)
                            <tr>

                                <td>{{$behavior->behave_date->format('d-m-Y')}}</td>
                                <td title="{{$behavior->behavior}}"><a href="{{url('guardian/enfant',$kid->id)}}">Aperçu</a></td>
                            </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Documents à télécharger</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                    <li>
                        @foreach($files as $file)
                            <h3>{{$file->matiere}}</h3>

                            <a href="http://pleinsoleil.edu-portail.com/documents/{{$file->fullname}} ", target="_blank"> {{$file->titre}}</a>

                        @endforeach
                    </li>
                    </ul>
                </div>
            </div>
        </div>



@endsection

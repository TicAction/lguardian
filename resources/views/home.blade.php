@extends('layouts.admin')
@section('content')

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{\Carbon\Carbon::now()->format("d/m/Y")}}</h3>
                </div>
                <div class="panel-body">
                    @foreach($fHomeworks as $fHomework)
                        <h4 class="text-left">
                            <a href="{{url('guardian/parent', $fHomework->id)}}">
                                Leçons du
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

@endsection

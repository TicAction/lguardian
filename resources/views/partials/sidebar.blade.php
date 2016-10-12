
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"> <em>LE NOM DE L'ENFANT</em></h3>
        </div>
        <div class="panel-body">
            <ul class="list-unstyled">
                @foreach($guardians as $guardian)
                    @foreach($guardian->kids as $kid)
                        <li>
                            <a href="{{route('enfant',$kid->id)}}">
                                {{$kid->firstname}} {{$kid->lastname}}
                            </a>
                        </li>
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

<ul class="nav nav-sidebar">

    @foreach($guardians as $guardian)
        @foreach($guardian->kids as $kid)
            <li>
                <a href="{{url('guardian/enfant',$kid->id)}}">
                    {{$kid->firstname}} {{$kid->lastname}}
                </a>
            </li>
        @endforeach
    @endforeach
<li>
    <a href="{{url('guardian/home')}}"> Page d'accueil</a>
</li>

</ul>



       

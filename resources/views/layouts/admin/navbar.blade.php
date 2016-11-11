<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>{{Auth::guard()->user()->name}}</strong>
                <small> Portail des parents</small>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url("/guardian/home")}}">Accueil</a>
                </li>
                <li>
                    <a href="#">Mon profil</a>
                </li>
                <li>
                    <a href="#" class="disabled"><i class="fa fa-paper-plane"></i> Courriel à l'enseignant(e)</a>
                </li>
                <li>
                    <form class="navbar-form navbar-left" method="post" action="{{url('guardian/code')}}">
                        <div class="form-group">
                            <input type="text" name="code" id="code" class="form-control" placeholder="Entrer le code">
                        </div>
                        <button type="submit" class="btn btn-default">Soumettre</button>
                        {{ csrf_field() }}
                    </form>
                </li>


            </ul>


            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{url("logout")}}">Déconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>
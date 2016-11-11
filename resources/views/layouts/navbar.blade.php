<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page des parents</title>
    {{--javascript--}}
    <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
            <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    {!! Html::style('css/slate.css') !!}
    {{--{!! Html::style('css/main.css') !!}--}}
    {!! Html::style('datepicker/css/bootstrap-datepicker.css') !!}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">


</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if(!Auth::guard()->user())
                <div class="navbar-brand">Page de connexion des parents</div>
            @else
                <span class="navbar-brand"> Portail des parents</span>

            @endif

        </div>

        @if(Auth::guard()->user())
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li>
                    <a href="{{ url('guardian/home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Accueil</a>
                    </li>

                </ul>

                <div class="nav navbar-nav">

                            <li>
                                {{--<a href="#" class="disabled"><i class="fa fa-paper-plane"></i> Courriel à l'enseignant(e)</a>--}}
                            </li>

                        <form class="navbar-form navbar-left" method="post" action="{{url('guardian/code')}}">

                            <div class="form-group">
                                <input type="text" name="code" id="code" class="form-control" placeholder="Entrer le code">
                            </div>
                            <button type="submit" class="btn btn-default">Soumettre</button>
                            {{ csrf_field() }}
                        </form>

                </div>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if(Auth::guard()->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <i class="fa fa-gears fa-lg"></i> {{ Auth::guard()->user()->name}} <span
                                        class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('logout') }}"><i class="fa fa-btn fa-sign-out"></i>
                                        Logout</a>
                                </li>

                                {{--<li><a href="{{ url('/groupe/create') }}"><i class="fa fa-user"aria-hidden="true"></i> Mon profil</a>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                    @endif
                </ul>
                @endif
            </div>
    </div>
</nav>

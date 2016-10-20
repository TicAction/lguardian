@include('layouts.navbar')

<div class="container-fluid">

    {{--include de la session de validation--}}
    @include("validators.validate")
<div class="col-md-3">
    @include('partials.sidebar')
</div>
    <div class="col-md-9">

        @yield('content')

    </div>

</div>

@include('layouts.footer')

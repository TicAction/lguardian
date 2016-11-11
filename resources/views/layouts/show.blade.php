@include('layouts.navbar')
<div class="container">

@include("validators.validate")

        <div class="col-md-12">
            @yield('content')
        </div>
</div>

@include('layouts.footer')
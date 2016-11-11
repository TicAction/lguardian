@include('layouts.admin.header')
@include('layouts.admin.navbar')

<div class="container-fluid">
    <div class="row">

                    <div class="col-md-10 col-md-offset-1 main-top">
                        @yield('content')
                    </div>


            </div>
    </div>

@include('layouts.admin.footer')
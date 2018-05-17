<nav class="navbar navbar-expand-lg navbar-dark  fixed-top navbar-custom" id="mainNav">
    <p class="navbar-brand">Admin Area</p>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

        @include('admin.partials.adminsidebar')

       {{--@include('layouts.nav')--}}

        @include('admin.partials.admintopbar')
    </div>
</nav>

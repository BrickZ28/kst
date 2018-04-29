<!doctype html>
<html lang="en">
@include('layouts.head')

<body>
<main>
@include('layouts.nav')

        @yield('content')

        {{--@include('layouts.sidebar')--}}
    </div>
</div>

</main>
@include('layouts.footer')

</body>


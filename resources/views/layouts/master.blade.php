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
    @include('layouts.customer')

</div>
<div class="bot-img mt-4">
    <div class="container">
        <div class="row">
            @include('layouts.botimg')
        </div>
    </div>
</div>
</main>
@include('layouts.footer')

</body>


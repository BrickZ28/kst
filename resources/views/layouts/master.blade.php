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
    <div class="hr-seperater">
        <span class="align-middle font-weight-bold slideLeft">What our customers are saying</span>
    </div>

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


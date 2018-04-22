<!doctype html>
<html lang="en">
@include('layouts.head')

<body>
<main>
@include('layouts.nav')

        @yield('content')

        @include('layouts.sidebar')
    </div>
</div>
<div class="container img-text">
    <p class="lead font-weight-normal logo-font" style="color: #f9f9fc">What our customers are saying</p>
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
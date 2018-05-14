@include('layouts.head')

@include('layouts.nav')

<body>
<div class="container-fluid container-admin">
    <div class="row">
        @include('admin.includes.sidenav')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  border-bottom">
                <h1 class="h2">Admin Page - {{ucfirst(Request::path())}}</h1>
            </div>

            <canvas class="my-4 w-100"></canvas>

            </main>
    </div>
</div>


</body>
</html>

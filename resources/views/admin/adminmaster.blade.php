@include('admin.partials.adminhead')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
@include('admin.partials.adminnav')
<div class="content-wrapper ">
    <div class="container-fluid mt-1">

        @yield('content')

        @include('admin.partials.adminfooter')
    </div>
    <!-- Bootstrap core JavaScript-->
   @include('admin.partials.adminscripts')
</div>
</body>

</html>

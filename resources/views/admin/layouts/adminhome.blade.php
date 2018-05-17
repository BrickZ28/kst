@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="row mt-3">
        <div class="col-xl-12 col-sm-12 mb-12">
            @foreach($events as $event)
                <div class="alert alert-info alert-dismissable fade show" role="alert">
                    {{'Upcoming - Events - ' . $event->venue . ' ' .  $event->date}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        </div>


    </div>
    <!-- Area Chart Example-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

@endsection
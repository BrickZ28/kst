@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div>
        <h1 class="text-center">Upcoming Events</h1>
    </div>
    <div class="row mt-3">
        <div class="col-xl-12 col-sm-12 mb-12">
            @include('admin.partials.messages')
            @foreach($events as $event)
                <div class="alert alert-dark alert-dismissable fade show mt-2" role="alert">
                    {!! '<strong>' . $event->venue . '</strong><p></p> <span
                    class="event-alert"> ' .
                    Carbon\Carbon::parse
                    ($event->date)->format('F dS Y @ h:iA') . '</span>'!!}
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
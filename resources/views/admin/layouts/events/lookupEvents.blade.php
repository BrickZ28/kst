@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Search Event</h2>

            <p class="lead">Use the form below to search for an event - only one field is required</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="get" action="{{action('EventController@search')}}" >
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Venue</label>
                            <input name="venue"
                                   type="text"
                                   class="form-control"
                            >
                        </div>


                    <div class="col-md-4 mb-3">
                        <label>Contact</label>
                        <input name="contact"
                               type="text"
                               class="form-control"
                        >
                    </div><div class="col-md-4 mb-3">
                        <label>Address</label>
                        <input name="address"
                               type="text"
                               class="form-control"
                        >
                    </div>
                    <hr class="mb-4">
                    <div class="container" style="text-align: center">
                        <button type="submit"  class="btn btn-light">Search Events</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- Area Chart Example-->

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->

@endsection
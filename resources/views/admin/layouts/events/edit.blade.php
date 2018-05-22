@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Edit Event</h2>

            <p class="lead">Use the form below to edit an event</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="post" action="{{action('EventController@update', $id)}}" >
                    {{ csrf_field() }}
                    <input type="hidden"
                           name="_method"
                           value="PATCH"
                    >
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Venue *</label>
                            <input name="venue"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ $event->venue }}"
                                   required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Date *</label>
                            <input name="date"
                                   type="date"
                                   class="form-control"
                                   id="date"
                                   placeholder=""
                                   value="{{ Carbon\Carbon::parse($event->date)->format('Y-m-d') }}"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Date *</label>
                            <input name="time"
                                   type="time"
                                   class="form-control"
                                   id="time"
                                   value="{{ $event->time }}"
                                   required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Contact</label>
                        <input name="contact"
                               type="text"
                               class="form-control"
                               id="contact"
                               value="{{ $event->contact }}">
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <input name="address"
                               type="text"
                               class="form-control"
                               id="address"
                               value="{{ $event->address }}"
                        >
                    </div>
                    <hr class="mb-4">
                    <div class="container" style="text-align: center">
                        <button type="submit"  class="btn btn-light">Edit Event</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Area Chart Example-->

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->

@endsection
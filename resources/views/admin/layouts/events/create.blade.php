@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Create Event</h2>

            <p class="lead">Use the form below to create a new event</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="post" action="{{url('events')}}" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Venue *</label>
                            <input name="venue"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ old('venue', '') }}"
                                   required>
                            @if($errors->has('venue'))
                                <p class="bg-danger text-white">{{ $errors->first('venue') }}</p>
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Date *</label>
                            <input name="date"
                                   type="date"
                                   class="form-control"
                                   id="date"
                                   placeholder=""
                                   value="{{ old('date', '') }}"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Time *</label>
                            <input name="time"
                                   type="time"
                                   class="form-control"
                                   id="time"
                                   placeholder=""
                                   value="{{ old('time', '') }}"
                                   required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Contact</label>
                        <input name="contact"
                               type="text"
                               class="form-control"
                               id="contact"
                               value="{{ old('contact', '') }}">
                        @if($errors->has('contact'))
                            <p class="bg-danger text-white">{{ $errors->first('contact') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <input name="address"
                               type="text"
                               class="form-control"
                               id="address"
                               value="{{ old('address', '') }}"
                        >
                        @if($errors->has('address'))
                            <p class="bg-danger text-white">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <hr class="mb-4">
                    <div class="container" style="text-align: center">
                        <button type="submit"  class="btn btn-light">Create Event</button>
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
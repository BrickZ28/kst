@extends('layouts.master')

@section('content')

    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('img/site/kstLogoXpar.png')}}" alt="" width="72" height="72">
            @if(session('sent'))
                <div class="alert alert-success">
                    {{session('sent')}}
                </div>
            @endif
            <h2>Contact us</h2>

            <p class="lead">Use the form below to let us know if you are interested in a private function.
                You can
                also use this form to ask us about upcoming events as well.</p>
        </div>

        <div class="form-group">
             <div class="col-12 ">
                <h4 class="mb-3">Your Information</h4>
                <form method="post" action="{{route('contact.store')}}" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>First name *</label>
                            <input name="fname"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ old('fname', '') }}"
                                   required>
                            @if($errors->has('fname'))
                                <p class="bg-danger text-white">{{ $errors->first('fname') }}</p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Last name</label>
                            <input name="lname"
                                   type="text"
                                   class="form-control"
                                   id="lastName"
                                   placeholder=""
                                   value="{{ old('lname', '') }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Email *</label>
                        <input name="email"
                               type="email"
                               class="form-control"
                               id="email"
                               placeholder="you@example.com"
                               value="{{ old('email', '') }}">
                        @if($errors->has('email'))
                            <p class="bg-danger text-white">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input name="phone"
                               type="phone"
                               class="form-control"
                               id="address"
                               value="{{ old('phone', '') }}"
                               >
                        @if($errors->has('phone'))
                            <p class="bg-danger text-white">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label>Message *</label>
                        <textarea name="message"
                                  class="form-control"
                                  id="exampleFormControlTextarea1"
                                  rows="3"
                                  value="{{ old('message', '') }}"></textarea>
                        @if($errors->has('message'))
                            <p class="bg-danger text-white">{{ $errors->first('message') }}</p>
                        @endif
                    </div>

                    <hr class="mb-4">
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
        </div>

@endsection
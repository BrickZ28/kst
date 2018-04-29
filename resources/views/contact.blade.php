@extends('layouts.master')

@section('content')

    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('img/site/kstLogoXpar.png')}}" alt="" width="72" height="72">
            <h2>Contact us</h2>
            <p class="lead">Use the form below to let us know if you are interested in a private function.
                You can
                also use this form to ask us about upcoming events as well.</p>
        </div>

        <div class="form-group">
             <div class="col-12 ">
                <h4 class="mb-3">Your Information</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Phone Number</label>
                        <input type="phone" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your phone number.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <hr class="mb-4">
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
        </div>

@endsection
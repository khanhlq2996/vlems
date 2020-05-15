@extends('admin.layouts.non-auth')

@section('content')

<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Register {{$type}}</h4>
                        <p class="sub-header">
                            Parsley is a javascript form validation library. It helps you provide your users with feedback on
                            their form submission before sending it to your server.
                        </p>
                        <form class="needs-validation" novalidate>
                            <input type="hidden" class="form-control" id="account-type" name="account_type" value="{{ $type }}" required>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                    value="{{ $type }}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                    value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                        placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="City"
                                    required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                    required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip"
                                    required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox form-check">
                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                    <label class="custom-control-label" for="invalidCheck">Agree to terms and
                                        conditions</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@endsection
@extends('admin.layouts.non-auth')

@section('content')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Register company</h4>
                        <form class="form-horizontal" method="POST" action="{{ route('form.register-company')}}">
                            @csrf
                        <input type="hidden" class="form-control" id="accountType" name="account_type" value="{{ config('constants.TYPE_ACCOUNT.COMPANY') }}">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="simpleinput">Tên đại lý<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control @if($errors->has('name')) input-invalid @endif" id="simpleinput" name="name" placeholder="Tên công ty">
                                            @error('name')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-email">Email<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="email" id="example-email" name="email"" class="form-control @if($errors->has('email')) input-invalid @endif"
                                                placeholder="Email">
                                            @error('email')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-password">Mật khẩu<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control @if($errors->has('password')) input-invalid @endif" name="password" value="">
                                            @error('password')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-password">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control @if($errors->has('password_confirmation')) input-invalid @endif" name="password_confirmation" value="">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Số điện thoại<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input class="form-control @if($errors->has('phone')) input-invalid @endif" type="tel" name="phone" placeholder="Số điện thoại">
                                            @error('phone')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="simpleinput">Địa chỉ</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="address" name="address"" placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="simpleinput">Người đại diện<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control @if($errors->has('representative')) input-invalid @endif" id="representative" name="representative"
                                                placeholder="Người đại diện">
                                            @error('representative')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Số điện thoại<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input class="form-control @if($errors->has('representative_phone')) input-invalid @endif" type="tel" name="representative_phone"
                                                placeholder="Số điện thoại">
                                            @error('representative_phone')
                                                <div class="invalid-feedback"> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-helping">Giới tính</label>
                                        <div class="col-lg-8">
                                            <select type="text" class="form-control" id="gender" name="gender">
                                                <option value="">--Giới tính--</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="0">Khác</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-date">Ngày sinh</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dob" type="date" name="dob"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="example-number">Số CMTND/Thẻ
                                            CCCD</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="indentityNumber" type="number" name="indentity_number"
                                                placeholder="Số CMTND/Thẻ CCCD">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Đăng ký</button>
                                    <a href="{{ route('access.login')}}" class="btn btn-info float-right" style="margin-right: 10px;">Quai lại đăng nhập</a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
    </div>
</div>
{{-- <div class="account-pages my-5">
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
        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="{{ $type }}"
            required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="validationCustom02">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
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
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="validationCustom03">City</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="validationCustom04">State</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
        <div class="invalid-feedback">
            Please provide a valid state.
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="validationCustom05">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
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
</div> --}}
<!-- end page -->

@endsection
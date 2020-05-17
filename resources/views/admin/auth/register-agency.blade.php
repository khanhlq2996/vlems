@extends('admin.layouts.non-auth')

@section('content')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Register agency</h4>
                        <form class="form-horizontal" method="POST" action="{{ route('form.register-agency')}}">
                            @csrf
                        <input type="hidden" class="form-control" id="accountType" name="account_type" value="{{ config('constants.TYPE_ACCOUNT.AGENCY') }}">
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

@endsection
@section('script')
<!-- Plugin js-->
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
@extends('admin.layouts.vertical')


@section('css')
<!-- Summernote css -->
<link href="{{ URL::asset('assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Công ty</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin công ty</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Cập nhật thông tin đại lý</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Nhập thông tin</h4>
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Tên đại lý</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Tên công ty">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-email">Email</label>
                                <div class="col-lg-8">
                                    <input type="email" id="example-email" name="example-email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-password">Mật khẩu</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="example-password" value="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Số điện thoại</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="tel" name="tel" placeholder="Số điện thoại">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Địa chỉ</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Địa chỉ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Khu vực</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Đông Nam Á</option>
                                        <option>Đông Á</option>
                                        <option>Khu vực khác</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Quốc gia</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Việt Nam</option>
                                        <option>Nhật Bản</option>
                                        <option>Hàn Quốc</option>
                                        <option>Trung Quốc</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Tỉnh/Thành phố</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Hà Nội</option>
                                        <option>Nhật Bản</option>
                                        <option>Hàn Quốc</option>
                                        <option>Trung Quốc</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Quận/Huyện</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Hai Bà Trưng</option>
                                        <option>Đống Đa</option>
                                        <option>Hoàn Kiếm</option>
                                        <option>Cầu Giấy</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Xã/Phường</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Bách Khoa</option>
                                        <option>Cầu Dền</option>
                                        <option>Thanh Nhàn</option>
                                        <option>Bạch Đằng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Facebook</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="url" name="url" placeholder="Facebook">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Zalo</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="url" name="url" placeholder="Zalo">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Dịch vụ</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Dịch vụ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Quốc gia xuất khẩu</label>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select">
                                        <option>Hàn Quốc</option>
                                        <option>Trung Quốc</option>
                                        <option>Nhật Bản</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Người đại diện</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Người đại diện">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Số điện thoại</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="tel" name="tel" placeholder="Số điện thoại">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-helping">Giới tính</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="example-helping" placeholder="Giới tính">
                            	</div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-date">Ngày sinh</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-number">Số CMTND/Thẻ CCCD</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="example-number" type="number" name="number" placeholder="Số CMTND/Thẻ CCCD">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-number">CTXKLĐ trước đó</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="example-number" type="number" name="number" placeholder="Chương trình XKLĐ trước đó">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-number">Hồ sơ XKLĐ trước đó</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="example-number" type="number" name="number" placeholder="Hồ sơ XKLĐ trước đó">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-fileinput">Album ảnh</label>
                                <div class="col-lg-8">
                                    <input type="file" class="form-control" id="example-fileinput">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-fileinput">Giấy phép kinh doanh</label>
                                <div class="col-lg-8">
                                    <input type="file" class="form-control" id="example-fileinput">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-textarea">Giới thiệu về đại lý</label>
                                <div class="col-lg-8">
                                    <div id="summernote-editor"></div> 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Lưu chỉnh sửa</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<!--Summernote js-->
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Init js -->
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection
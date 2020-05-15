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
                <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm Đơn hàng mới</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Thêm Đơn hàng mới</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Nhập thông tin Đơn hàng</h4>
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Tên Đơn hàng</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Tên Đơn hàng">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Thị trường</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Thị trường">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Ngành nghề</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Ngành nghề">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Số lượng/Giới tính</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Số lượng/Giới tính">
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="simpleinput">Yêu cầu trình độ</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="simpleinput" name="simpleinput" placeholder="Yêu cầu trình độ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="example-textarea">Mô tả</label>
                                <div class="col-lg-8">
                                    <div id="summernote-editor"></div> 
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Lưu Đơn hàng</button>
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
@extends('admin.layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-sm-8 col-xl-6">
        <h4 class="mb-1 mt-0">
            Đại lý System Architect
            
        </h4>
    </div>
    <div class="col-sm-4 col-xl-6 text-sm-right">
        <div class="btn-group ml-2 d-none d-sm-inline-block">
            <a href="/admin/agency/edit" class="btn btn-soft-primary btn-sm"><i class="uil uil-edit mr-1"></i>Sửa</a>
        </div>
        <div class="btn-group d-none d-sm-inline-block">
            <button type="button" class="btn btn-soft-danger btn-sm"><i
                    class="uil uil-trash-alt mr-1"></i>Xóa</button>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body p-0">
                <h6 class="card-title border-bottom p-3 mb-0 header-title">Tổng quan</h6>
                <div class="row py-1">
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 1 -->
                        <div class="media p-3">
                            <i data-feather="package" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0">210</h4>
                                <span class="text-muted font-size-13">Chương trình xuất khẩu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 2 -->
                        <div class="media p-3">
                            <i class="uil uil-suitcase align-self-center icon-dual icon-lg mr-4 font-size-24"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0">121</h4>
                                <span class="text-muted">Hồ sơ xuát khẩu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 3 -->
                        <div class="media p-3">
                            <i data-feather="globe" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0">12</h4>
                                <span class="text-muted">Quốc gia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 3 -->
                        <div class="media p-3">
                            <i data-feather="clock" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0">2500</h4>
                                <span class="text-muted">Ngành nghề</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- details-->
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <h6 class="mt-0 header-title">Giới thiệu đại lý</h6>

                <div class="text-muted mt-3">
                    <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of
                        mine told me what Occidental is. The European languages are members of the same family. Their
                        separate existence is a myth.</p>
                    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive
                        translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and
                        more common words. If several languages coalesce, the grammar of the resulting language is more
                        simple and regular than that of the individual languages.</p>
                    <ul class="pl-4 mb-4">
                        <li>Quis autem vel eum iure</li>
                        <li>Ut enim ad minima veniam</li>
                        <li>Et harum quidem rerum</li>
                        <li>Nam libero cum soluta</li>
                        <li>Quis autem vel eum iure</li>
                        <li>Ut enim ad minima veniam</li>
                        <li>Et harum quidem rerum</li>
                        <li>Nam libero cum soluta</li>
                    </ul>
                    <h6 class="mt-0 header-title">Dịch vụ</h6>
                        <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of
                        mine told me what Occidental is. The European languages are members of the same family. Their
                        separate existence is a myth.</p>
                        <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive
                        translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and
                        more common words. If several languages coalesce, the grammar of the resulting language is more
                        simple and regular than that of the individual languages.</p>
                        <ul class="pl-4 mb-4">
                            <li>Quis autem vel eum iure</li>
                            <li>Ut enim ad minima veniam</li>
                            <li>Et harum quidem rerum</li>
                            <li>Nam libero cum soluta</li>
                            <li>Quis autem vel eum iure</li>
                            <li>Ut enim ad minima veniam</li>
                            <li>Et harum quidem rerum</li>
                            <li>Nam libero cum soluta</li>
                        </ul>

                    <div class="mt-4">
                        <h6 class="font-weight-bold">Giấy phép kinh doanh</h6>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="p-2 border rounded mb-2">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Landing 1.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-3">
                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-lg" />
                    <h5 class="mt-2 mb-2">Đại lý System Architect</h5>

                    <a href="" class="btn btn-primary btn-sm mr-1">Gọi</a>
                    <a href="" class="btn btn-white btn-sm">Nhắn tin</a>
                </div>

                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>systemarchitect@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Điện thoại</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">Điện thoại</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">Địa chỉ</th>
                                    <td>Đại học Bách Khoa Hà Nội</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="mb-3 font-size-15">Bản đồ</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" height="400px" width="100%" class="rounded" style="border: 0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection
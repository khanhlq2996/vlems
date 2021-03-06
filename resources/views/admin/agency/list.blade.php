@extends('admin.layouts.vertical')


@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/admin/company">Đại lý</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách Đại lý</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Danh sách Đại lý </h4>
    </div>
</div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="key-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Tên Đại lý</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Người đại diện</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-success"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-danger"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-success"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-danger"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-success"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-danger"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-success"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-danger"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-success"> </i></td>
                            </tr>
                            <tr>
                                <td><a href="/admin/agency/detail/1">System Architect</a></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td class="text-center" ><i class="uil uil-check-square text-danger"> </i></td>
                            </tr>
                            

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection
@extends('layouts.master')
@section('customCss')
<!-- Datatables -->
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="{{url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Gaji <small>Management</small></h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Table Gaji<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li>
                            @can('create-role')
                            <a class="btn btn-success text-white btn-flat" href="{{ route('gaji.create') }}"><span class="fa fa-user-plus"> </span> Add</a>
                            @endcan
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Requester</th>
                                            <th>Nomor Dokument</th>
                                            <th>Tanggal Pembuatan</th>
                                            <th>Status</th>
                                            <!-- <th>Created Date</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                                            <td>User</td>
                                            <td>7767657767</td>
                                            <td>29-02-2024</td>
                                            <td>
                                                <span class="badge bg-primary text-white fs-3">
                                                    Waiting Approval
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                                            <td>User</td>
                                            <td>7767657767</td>
                                            <td>29-02-2024</td>
                                            <td>
                                                <span class="badge bg-primary text-white fs-3">
                                                    Waiting Approval
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                                            <td>User</td>
                                            <td>7767657767</td>
                                            <td>29-02-2024</td>
                                            <td>
                                                <span class="badge bg-primary text-white fs-3">
                                                    Waiting Approval
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                                            <td>User</td>
                                            <td>7767657767</td>
                                            <td>29-02-2024</td>
                                            <td>
                                                <span class="badge bg-primary text-white fs-3">
                                                    Waiting Approval
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a></td>
                                            <td>User</td>
                                            <td>7767657767</td>
                                            <td>29-02-2024</td>
                                            <td>
                                                <span class="badge bg-primary text-white fs-3">
                                                    Waiting Approval
                                                </span>
                                            </td>
                                        </tr>

                                        <!-- <td colspan="3">
                                            <span class="text-danger">
                                                <strong>No Gaji Found!</strong>
                                            </span>
                                        </td> -->

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customJs')
<!-- Datatables -->
<script src="{{url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{url('assets/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{url('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{url('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

@endsection
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
            <h3>Pengajuan <small>Kenaikan Gaji</small></h3>
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
                    <h2>Data Diri<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- <li>
                            @can('create-role')
                            <a class="btn btn-success text-white btn-flat" href="{{ route('gaji.create') }}"><span class="fa fa-user-plus"> </span> Add</a>
                            @endcan
                        </li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" readonly placeholder="Enter Name">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Email</label>
                                <input type="email" class="form-control" readonly name="email" placeholder="Password">
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label>NRP</label>
                                <input type="text" class="form-control" readonly name="nrp" placeholder="nrp">
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label>Jabatan</label>
                                <input type="jabatan" class="form-control" readonly name="jabatan" placeholder="jabatan">
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label>Lama Jabatan</label>
                                <input type="jabatan" class="form-control" readonly name="jabatan" placeholder="3 tahun 9 bulan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- form pengajuan -->
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pengajuan<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- <li>
                            @can('create-role')
                            <a class="btn btn-success text-white btn-flat" href="{{ route('gaji.create') }}"><span class="fa fa-user-plus"> </span> Add</a>
                            @endcan
                        </li> -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group col-md-6 col-sm-6">
                                    <label>DRH</label>
                                    <!-- <input type="file" class="form-control" name="drh" placeholder="Enter Name"> -->
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label>KGB</label>
                                    <!-- <input type="file" class="form-control" name="drh" placeholder="Enter Name"> -->
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label>SKEP Jabatan</label>
                                    <!-- <input type="file" class="form-control"  name="drh" placeholder="Enter Name"> -->
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label>SKEP Pangkat</label>
                                    <input type="file" class="form-control"  name="drh" placeholder="Enter Name">
                                    <!-- <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div> -->
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>


                            </form>

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
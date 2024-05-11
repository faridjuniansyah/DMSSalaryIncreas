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
            <h3>ROLE <small>Management</small></h3>
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
                    <h2>Role Management <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li>
                            @can('create-role')
                            <a class="btn btn-success btn-flat" href="{{ route('roles.create') }}"><span class="fa fa-user-plus"> </span> Add</a>
                            @endcan
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>

                                                    @if ($role->name!='Super Admin')
                                                    @can('edit-role')
                                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                    @endcan

                                                    @can('delete-role')
                                                    @if ($role->name!=Auth::user()->hasRole($role->name))
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?');"><i class="fa fa-trash"></i></button>
                                                    @endif
                                                    @endcan
                                                    @endif

                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <td colspan="3">
                                            <span class="text-danger">
                                                <strong>No Role Found!</strong>
                                            </span>
                                        </td>
                                        @endforelse
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
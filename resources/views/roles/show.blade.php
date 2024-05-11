@extends('layouts.master')

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
                    <h2>Show Role<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li>
                            @can('create-role')
                            <a class="btn btn-success btn-flat" href="{{ route('roles.index') }}"></span> &larr; Back</a>
                            @endcan
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <span class="btn btn-primary">{{ $role->name }}</span>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Permissions <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            @if ($role->name=='Super Admin')
                            <span class="badge bg-primary text-white fs-4">All</span>
                            @else
                            @forelse ($rolePermissions as $permission)
                            <span class="badge bg-primary text-white fs-3">
                            {{ $permission->name }}
                            </span>
                            @empty
                            @endforelse
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid"></div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
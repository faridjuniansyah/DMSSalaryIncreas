@extends('layouts.master')

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
                    <h2>Add New Gaji<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li>
                            <!-- @can('create-role') -->
                            <a class="btn btn-primary text-white btn-flat" href="{{ route('gaji.index') }}"></span> &larr; Back</a>
                            <!-- @endcan -->
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" action="{{ route('gaji.store') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="golongan">Golongan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan" value="{{ old('golongan') }}">
                                @if ($errors->has('golongan'))
                                <span class="text-danger">{{ $errors->first('golongan') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlah">Jumlah <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}">
                                @if ($errors->has('jumlah'))
                                <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-success" value="Add Role">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
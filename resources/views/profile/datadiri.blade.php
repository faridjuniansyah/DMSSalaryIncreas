@extends('layouts.master')

@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>My Profile<small></small></h3>
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
                    <h2>Profile <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">

                        <div class="col-sm-12 col-md-12">
                            <div class="col-md-3 col-sm-3  profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="{{url('assets/images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                                <br />
                                <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                <br />

                            </div>
                            <div class="col-md-9 col-sm-9 ">

                                <div class="profile_title ">
                                    <div class="col-md-12">
                                        <h2>Personel BIO</h2>
                                    </div>
                                </div>
                                <form id="demo-form" class="mt-2" data-parsley-validate>
                                    <div class="input_dinamis col-md-12 col-sm-12">
                                        <div class="col-md-6 col-sm-6">
                                            <label for="fullname">Nama Lengkap * :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="email">Email * :</label>
                                            <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="email">Tempat Lahir :</label>
                                            <input type="text" id="ttl" class="form-control" name="ttl" data-parsley-trigger="change" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="tgl">Tanggal Lahir :</label>
                                            <input type="date" id="tgl" class="form-control" name="tgl" data-parsley-trigger="change" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="fullname">Jenis Kelamin * :</label>
                                            <select class="form-control" required>
                                                <option value="">Choose..</option>
                                                <option value="laki-laki">Laki - laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="fullname">Suku * :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="fullname">Agama * :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="fullname">NRP * :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label for="fullname">Status * :</label>
                                            <select class="form-control" required>
                                                <option value="">Choose..</option>
                                                <option value="aktif">Aktif</option>
                                                <option value="tidak aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
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
</div>

@endsection
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
                                <form id="demo-form" class="mt-2" data-parsley-validate method="POST" action="{{ route('personel.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- <div class="col-sm-12"> -->
                                    <input class="btn btn-primary w-100" type="file" name="foto" />
                                    <!-- </div> -->

                                    <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->
                                    <br />

                            </div>
                            <div class="col-md-9 col-sm-9 ">

                                <div class="profile_title ">
                                    <div class="col-md-12">
                                        <h2>Personel BIO</h2>
                                    </div>
                                </div>

                                <div class="input_dinamis col-md-12 col-sm-12">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama Lengkap * :</label>
                                        <input type="text" id="name" class="form-control" name="name" value="{{$personel->name}}" required />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="email">Email * :</label>
                                        <input type="email" id="email" class="form-control" name="email" value="{{$user->email}}" data-parsley-trigger="change" required />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="tempat_lahir">Tempat Lahir :</label>
                                        <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" value="{{$personel->tempat_lahir}}" data-parsley-trigger="change" required />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="tgl">Tanggal Lahir :</label>
                                        <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir" value="{{$personel->tgl_lahir}}" data-parsley-trigger="change" required />
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label for="fullname">Jenis Kelamin * :</label>
                                        <select name="gender" class="form-control" required>
                                            <option value="">Choose..</option>
                                            <option value="laki-laki" {{ $personel->gender == 'laki-laki' ? 'selected' : '' }}>Laki - laki</option>
                                            <option value="perempuan" {{ $personel->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label for="fullname">Suku * :</label>
                                        <input type="text" id="suku" class="form-control" name="suku" value="{{$personel->suku}}" required />
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <label for="fullname">Agama * :</label>
                                        <input type="text" id="agama" class="form-control" name="agama" value="{{$personel->agama}}" required />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="fullname">NRP * :</label>
                                        <input type="text" id="nrp" class="form-control" name="nrp" value="{{$user->nrp}}" required />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="fullname">Status * :</label>
                                        <select name="status" class="form-control" required>
                                            <option value="">Choose..</option>
                                            <option value="Aktif" {{ $personel->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                            <option value="Tidak Aktif" {{ $personel->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="fullname">Penugasan * :</label>
                                        <select name="penugasan" class="form-control" required>
                                            <option value="">Choose..</option>
                                            <option value="POLDA" {{ $personel->penugasan == 'POLDA' ? 'selected' : '' }}>POLDA</option>
                                            <option value="POLRES" {{ $personel->penugasan == 'POLRES' ? 'selected' : '' }}>POLRES</option>
                                            <option value="POLSEK" {{ $personel->penugasan == 'POLSEK' ? 'selected' : '' }}>POLSEK</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="fullname">Tempat Penugasan * :</label>
                                        <input type="text" id="tempat_penugasan" class="form-control" name="tempat_penugasan" value="{{$personel->tempat_penugasan}}" required />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <a class="btn btn-primary" href="{{route('myprofile')}}">Back</a>
                                            <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
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
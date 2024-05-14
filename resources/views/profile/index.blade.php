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
                                <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                        <br /> -->

                            </div>
                            <div class="col-md-9 col-sm-9 ">

                                <div class="profile_title ">
                                    <div class="col-md-6">
                                    </div>
                                    <h2>Data Diri</h2>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="control-label col-md-3 col-sm-3 ">Nama Lengkap</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <label class="control-label">: {{ $user->name }}</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Pangkat/NRP</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <label class="control-label">: BRIPTU/99060156</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Jabatan/TMT</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <label class="control-label">: RO SDM POLDA JABAR (2024-04-01)</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Lama Jabatan</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <label class="control-label">: 3 Tahun 9 Bulan 5 Hari</label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Tempat Tanggal Lahir</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <label class="control-label">: {{$personel->tempat_lahir}}, {{$personel->tgl_lahir}}</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 ">Agama</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <label class="control-label">: Islam</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <label class="control-label">: Aktif</label>
                                                    </div>
                                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="col-sm-3 col-md-3">
                                <div class="profile_title ">
                                    <div class="col-md-12 col-sm-12">
                                        <h6>Pendidikan Kepolisian</h6>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tingkat</th>
                                                <th>Tahun</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DIKTUKBA</td>
                                                <td>2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-5 col-md-5">
                                <div class="profile_title ">
                                    <div class="col-md-12 col-sm-12">
                                        <h6>Pendidikan Umum</h6>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Tingkat</th>
                                                <th>Nama Institusi</th>
                                                <th>Tahun Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendidikan as $pendidikans )
                                            <tr>
                                                <td>{{$pendidikans->tingkat}}</td>
                                                <td>{{$pendidikans->nama_institusi}}</td>
                                                <td>{{$pendidikans->tahun}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="profile_title ">
                                    <div class="col-md-12 col-sm-12">
                                        <h6>Riwayat Pangkat</h6>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Pangkat</th>
                                                <th>TMT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BRIPTU</td>
                                                <td>01-07-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="col-sm-8 col-md-8">
                                <div class="profile_title ">
                                    <div class="col-md-12 col-sm-12">
                                        <h6>Riawayat Jabatan</h6>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Jabatan</th>
                                                <th>TMT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BRIPTU</td>
                                                <td>01-07-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="col-sm-12 col-md-12">
                                    <div class="profile_title ">
                                        <div class="col-md-12 col-sm-12">
                                            <h6>Tanda Kehormatan</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tanda Kehormatan</th>
                                                    <th>TMT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tanda_kehormatan as $tanda_kehormatans)
                                                <tr>
                                                    <td>{{$tanda_kehormatans->tanda_kehormatan}}</td>
                                                    <td>{{$tanda_kehormatans->tmt}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="profile_title ">
                                        <div class="col-md-12 col-sm-12">
                                            <h6>Kemampuan Bahasa</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Bahasa</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bahasa as $bahasas )
                                                <tr>
                                                    <td>{{$bahasas->bahasa}}</td>
                                                    <td>{{$bahasas->status}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="profile_title ">
                                <div class="col-md-12 col-sm-12">
                                    <h6>Penugasan Luar Struktur</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
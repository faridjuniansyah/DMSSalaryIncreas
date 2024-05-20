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
            <h3>Penugasan Luar<small></small></h3>
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
                    <h2>Form Penugasan Luar <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('penugasan.update')}}">
                            @csrf
                                <div class="input_dinamis col-md-12 col-sm-12">
                                    @forelse ($penugasan as $value )
                                    <div class="col-sm-12">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="tanda_kehormatan">Penugasan :</label>
                                            <input type="text" id="penugasan" class="form-control" name="penugasan[]" value="{{$value->penugasan}}" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="tmt">Lokasi :</label>
                                            <input type="text" id="lokasi" class="form-control" name="lokasi[]" value="{{$value->lokasi}}" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4 mt-4">
                                            <button class="btn btn-success" onclick="addFormInput()"><i class="fa fa-plus"></i> Add</button>
                                            <button class="btn btn-danger" onclick="removeFormInput(this)"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-sm-12">
                                        <div class="col-md-4 col-sm-4">
                                            <label for="tanda_kehormatan">Penugasan :</label>
                                            <input type="text" id="penugasan" class="form-control" name="penugasan[]" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="lokasi">Lokasi :</label>
                                            <input type="text" id="lokasi" class="form-control" name="lokasi[]" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4 mt-4">
                                            <button class="btn btn-success" onclick="addFormInput()"><i class="fa fa-plus"></i> Add</button>
                                            <button class="btn btn-danger" onclick="removeFormInput(this)"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    @endforelse
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">                                            
                                            <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                                            <a class="btn btn-primary" href="{{route('myprofile')}}">Back</a>
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

<script>
    function addFormInput() {
        // Dapatkan elemen div kolom yang berisi input
        var formRow = document.querySelector('.input_dinamis');

        // Buat elemen div baru untuk baris input tambahan
        var newFormRow = document.createElement('div');
        newFormRow.className = 'input_dinamis';

        // Isi elemen div baru dengan input yang sama seperti sebelumnya
        newFormRow.innerHTML = `
            
        <div class="col-md-4 col-sm-4">
            <label for="penugasan">Penugasan :</label>
            <input type="text" id="penugasan" class="form-control" name="penugasan[]" required />
        </div>
        <div class="col-md-4 col-sm-4">
            <label for="tmt">Lokasi :</label>
            <input type="text" id="lokasi" class="form-control" name="lokasi[]" required />
        </div>
        <div class="col-md-3 col-sm-3 mt-4">
            <button class="btn btn-danger" onclick="removeFormInput(this)"><i class="fa fa-close"></i></button>
        </div>
        `;

        // Sisipkan elemen div baru sebelum tombol "Add"
        formRow.insertBefore(newFormRow, formRow.lastElementChild);
    }

    function removeFormInput(button) {
        // Dapatkan elemen div yang berisi tombol "Remove" yang diklik
        var formRowToRemove = button.parentElement.parentElement;

        // Hapus elemen div yang berisi baris input tambahan
        formRowToRemove.remove();
    }
</script>

@endsection
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
                            <form class="form-horizontal form-label-left">
                                <div class="input_dinamis col-md-12 col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="col-md-34 col-sm-4">
                                            <label for="fullname">Penugasan :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <label for="fullname">Lokasi :</label>
                                            <input type="text" id="fullname" class="form-control" name="fullname" required />
                                        </div>
                                        <div class="col-md-4 col-sm-4 mt-4">
                                            <button class="btn btn-secondary" onclick="addFormInput()"><i class="fa fa-plus"></i> Add</button>
                                        </div>
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
            
            <div class="col-md-34 col-sm-4">
                <label for="fullname">Penugasan :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />
            </div>
            <div class="col-md-4 col-sm-4">
                <label for="fullname">Lokasi :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />
            </div>
            <div class="col-md-3 col-sm-3 mt-4">
                <button class="btn btn-secondary" onclick="removeFormInput(this)"><i class="fa fa-close"></i> Remove</button>
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
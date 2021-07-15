@extends('layouts.mastermasuk')

{{-- @section('header')
    
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ asset('admin/assets/#')}}">Home</a></li>
<li class="breadcrumb-item active">Dashboard v1</li>
</ol>

@endsection --}}


@section('content')
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Entry Backup Surat Masuk</h3>
    </div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
    </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/masuk/store" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="exampleInputEmail1">Nomor Surat</label>
                <input type="text" class="form-control" placeholder="Nomor Surat" style="text-transform: uppercase"
                    name="no">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Asal Surat</label>
                <input type="text" class="form-control" placeholder="Asal Surat" style="text-transform: uppercase"
                    name="asal">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Perihal</label>
                <textarea class="form-control" rows="3" placeholder="Perihal" style="text-transform: uppercase"
                    name="perihal"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Disposisi</label>
                <textarea class="form-control" rows="3" placeholder="Disposisi" style="text-transform: uppercase"
                    name="disposisi"></textarea>
            </div>
            <div class="col-md-12">
                <div class="card card-primary">
                    {{-- <div class="card-header">
                        <h3 class="card-title">Penanggalan</h3>
                    </div> --}}
                    <div class="card-body">
                        <!-- Date -->
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    {{-- membuat datetimepicker menjadi 2 yaitu datetimepicker 4 dan 2 --}}
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <LABEL>Tanggal Surat:</LABEL>
                                            {{-- setting tanggal liat di master bagian paling bawah--}}
                                            <div class="input-group date" id="datetimepicker4"
                                                data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    name="tgl_s" data-target="#datetimepicker4">
                                                <div class="input-group-append" data-target="#datetimepicker4"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <LABEL>Tanggal Terima:</LABEL>
                                            <div class="input-group date" id="datetimepicker2"
                                                data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    name="tgl_t" data-target="#datetimepicker2">
                                                <div class="input-group-append" data-target="#datetimepicker2"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form group -->

                                <!-- /.card -->


                                <!-- /.card -->
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input Surat</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="arsip">
                                    {{-- <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                    </div> --}}
                                    {{-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input disposisi</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="arsip_disposisi">
                                    {{-- <div class="custom-file">
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div> --}}
                                    {{-- <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div> --}}
                                </div>
                            </div>
                            {{-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
                        </div>
                        <!-- /.card-body -->
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="card-footer col-6">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                                <div class="card-footer col-6 ">
                                    <button type="button" class="btn btn-primary float-right "
                                        onclick="goBack()">Kembali</button>
                                </div>
                            </div>
                        </div>
    </form>

</div>

@endsection
@extends('layouts.masterSK')

@section('content')
<!-- /.content-header -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Entry Backup Surat Keputusan</h3>
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
    <form role="form" method="POST" action="/sk/store" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="exampleInputEmail1">Nomor Surat</label>
                <input type="text" class="form-control" placeholder="Nomor Surat" style="text-transform: uppercase"
                    name="no">
            </div>
            <div class="form-group">

                {{-- membuat datetimepicker menjadi 2 yaitu datetimepicker 4 dan 2 --}}

                <LABEL>Tanggal Surat:</LABEL>
                {{-- setting tanggal liat di master bagian paling bawah--}}
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" name="tgl_s"
                        data-target="#datetimepicker4">
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Perihal</label>
                <textarea class="form-control" rows="3" placeholder="Perihal" style="text-transform: uppercase"
                    name="perihal"></textarea>
            </div>
            <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputFile">File input PDF Surat</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="arsip_pdf">
                        {{-- <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                    </div> --}}
                        {{-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div> --}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input Master surat</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="arsip_master">
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
                        <button type="button" class="btn btn-primary float-right " onclick="goBack()">Kembali</button>
                    </div>
                </div>
            </div>
    </form>

</div>

@endsection
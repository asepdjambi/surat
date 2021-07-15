@extends('layouts.masterkeluar')
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Data Surat Keluar</h1>
            </div>
            <div class="col-sm-3">
                <a href="/keluar"> <button type="button" class="btn btn-block bg-gradient-primary"><i
                            class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp; TAMBAH SURAT
                        KELUAR</button></a>
            </div>
            <!-- {{-- <div class="col-sm-6"> -->
                <!-- <ol class="breadcrumb float-sm-right"> -->
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                    <!-- <li class="breadcrumb-item active">DataTables</li> -->
                <!-- </ol> -->
            <!-- </div> --}} -->
        </div>
    </div>


    <div class="card">
        {{-- <div class="card-header">
            <h3 class="card-title">Data Surat Masuk</h3>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" style="width: 100%">

                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nomor Surat</th>
                        <th>Tujuan Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal</th>
                        <th style="text-align: center">View</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1
                    @endphp
                    @foreach ($datakeluar as $dk)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $dk->no }}</td>
                        <td>{{$dk->tujuan}}</td>
                        <td>{{ $dk->tgl_s->isoformat('D-MM-Y') }}</td>
                        <td>{{ $dk->perihal }}</td>
                        <td>
                            <div class="btn list vertical">
                                <a href="{{ url('arsip/keluar/pdf/'.$dk->arsip_pdf) }}" target="_blank"> <button
                                        type="button"
                                        class="btn btn-block bg-gradient-primary btn-sm"></i>PDF</button></a>
                                @if (file_exists('arsip/keluar/master/'.$dk->arsip_master))
                                <a href="{{ url('arsip/keluar/master/'.$dk->arsip_master) }}" target="_blank"> <button
                                        type="button"
                                        class="btn btn-block bg-gradient-primary btn-sm">Master</button></a>
                                @endif
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm"
                                    disabled>Master</button></a>

                            </div>
                        </td>
                    </tr>
                    @php
                    ($i++)
                    @endphp
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            {{-- Halaman ke :&nbsp;{{ $datamasuk->CurrentPage() }}<br>
            Jumlah Surat:&nbsp;{{ $datamasuk->total() }}<br>
            Data Per Halaman:&nbsp;{{ $datamasuk->PerPage() }} --}}
        </div>
    </div>
    {{-- <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <ul class="pagination">
                {{ $datakeluar->links() }}
    </ul>
    </div>
    </div> --}}
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


@endsection